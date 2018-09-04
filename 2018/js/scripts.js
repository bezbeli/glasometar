$(document).on("click", ".open-dialog", function() {
    ids = ["0", $(this).data('id')];
});

$('#modal').on('show.bs.modal', function(e) {
    //alert ('ok');
    if (typeof(questions) == "undefined") {
        //load answers
        $.ajax({
            url: '../questions.json',
            success: function(data) {
                var questions = data;
                create_comparison(questions);
            }
        });
    } else {
        create_comparison(questions);
    }
});

function create_comparison(questions) {
    if (typeof(details) == "undefined") {
        //load answers
        $.ajax({
            url: '../details.json',
            success: function(data) {
                make_comparison(questions, data);
            }
        });
    } else {
        make_comparison(questions, data);
    }
}

function make_comparison(questions, details) {
    if (typeof(ids) == "undefined") ids = ["0", "0"];
    html = '<table class="table small w-100 table-striped comparison-table"><thead>';
    v1_id = ids[0];
    v2_id = ids[1];
    html += '<tr><th>' + texts['question'] + '</th><th class="comp-center">' + answers[v1_id]['short_name'] + '</th><th></th><th class="comp-center">' + answers[v2_id]['short_name'] + '</th></tr>';
    html += '</thead><tbody>';
    for (key in questions) {
        q_id = questions[key]['id'];
        vote1 = answers[v1_id]['vote'][q_id];
        vote2 = answers[v2_id]['vote'][q_id];
        detail1 = get_detail(details, v1_id, q_id);
        detail2 = get_detail(details, v2_id, q_id);
        if (typeof(weights[q_id]) != "undefined")
            important = "<i class='fa fa-star'></i> </span>";
        else
            important = '';
        html += "<tr><td>" + important + questions[key]['name'] + tooltip(questions[key]['question'], 'fa-info-circle');
        html += "</td><td class='comp-center'>" + val2word(vote1);
        if (detail1) html += tooltip(detail1, 'fa-info-circle');
        html += "</td><td class='comp-center'>";
        html += compare_answers(vote1, vote2);
        html += "</td><td class='comp-center'>" + val2word(vote2);
        if (detail2) html += tooltip(detail2, 'fa-info-circle');
        html += "</td></tr>";
    }
    html += "</tbody></table>"
    $("#comparison-dialog").html(html);
    $(".tooltip-top").tooltip({ placement: 'top' });
}

function compare_answers(a1, a2) {
    if (a1 * a2 == -1) return "<strong>✘</strong>";
    else return "";
}

function tooltip(text, icon) {
    return "<span data-toggle='tooltip' data-placement='top' title='" + text + "' class='tooltip-top'> <i class='fa " + icon + "'></i> </span>";
}

function get_detail(details, vid, qid) {
    if (typeof(details[vid]) == "undefined") return false;
    if (typeof(details[vid][qid]) == "undefined") return false;
    else return details[vid][qid];
}

function val2word(val) {
    if (typeof(val) == "undefined") return '=';
    if (val == 1) return texts['yes'];
    if (val == -1) return texts['no'];
    return "-";
}

function showmatrix(matrix,order,category1) {

  contWidth = $('#viz').width();
  // console.log(contWidth);

    var margin = {top: 0, right: 0, bottom: 0, left: 0},
        padding = {top: 100, right: 0, bottom: 0, left: 100},
        width = contWidth - margin.left - margin.right - padding.left - padding.right,
        height = contWidth - margin.top - margin.bottom - padding.top - padding.bottom;
        square = {padding: 0.2}

    var x = d3.scale.linear()
        .range([0, Math.min(width,height)]);

    var y = d3.scale.linear()
        .range([0,Math.min(width,height)]);

    var color = d3.scale.linear()
        .domain([0, 35, 55, 75, 100])
        .range(["#880000", "red", "yellow", "green", "green"]);

        mpleft = margin.left+padding.left;
        mptop = margin.top+padding.top;

    //and when we have a container, we can fill it:
    $(function(){
      $('#viz').html('');
      var svg = d3.select("#viz").append("svg")
        .attr("width", width + margin.left + margin.right + padding.left + padding.right)
        .attr("height", height + margin.top + margin.bottom + padding.top + padding.bottom)
      .append("g")
        .attr("transform", "translate(" + mpleft + "," + mptop + ")");


      ncat = Object.keys(matrix).length;
      square['size'] = Math.floor(Math.min(width,height)/ncat);
      square['innersize'] = Math.floor(square['size']*(1-square['padding']));

      //domains:
      x.domain([0,ncat]);
      y.domain([0,ncat]);

      category1.push(''); //needed to have one more category

      var scale = d3.scale.ordinal()
            .domain(category1)
	        .rangePoints([0, Math.floor(Math.min(width,height))]);

      //axes
      var xAxis = d3.svg.axis()
            .scale(scale)
            .orient("bottom");

      var yAxis = d3.svg.axis()
            .scale(scale)
            .orient("right");

    //axes content
      var xaxisContent = svg.append("g")
	        .attr("class", "x axis")
	        .attr("transform", "translate(0,-"+ padding.top/2 +")")
	        .attr("font-size", function () {return Math.floor(square['innersize']*.4)+"px"})
	        .call(xAxis);

      svg.selectAll("g.axis text")
         .attr("transform", "rotate(-90)");

      var yaxisContent = svg.append("g")
            .attr("class", "y axis")
            .attr("transform", "translate(-" + padding.left + ","+square['size']/2+")")
            .attr("font-size", function () {return Math.floor(square['innersize']*.4)+"px"})
            .call(yAxis);


      //reorder 'matrix' for 'data'
      data = matrix2data(matrix,order);

    //create rects
      var rect = svg.selectAll(".rect")
          .data(data)
        .enter().append("g")
          .on("mouseover", function (d, i) {
            icko = i
            svg.selectAll(".rect")
		        .filter(function (d, i) {
			        return ((i % ncat) == (icko % ncat) || Math.floor(i/ ncat) == Math.floor(icko / ncat) )
		        })
		        .attr("class", "rect hover")
            yaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return ((i % ncat) == (icko % ncat))
		        })
		        .attr("class", "hoverBold")

	        xaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return (i == Math.floor(icko / ncat))
		        })
		        .attr("class", "hoverBold")
          })
          .on("mouseout", function (d, i) {
	        icko = i
	        svg.selectAll(".rect")
		        .filter(function (d, i) {
			        return ((i % ncat) == (icko % ncat) || Math.floor(i/ ncat) == Math.floor(icko / ncat) )
		        })
		        .attr("class", "rect")
	        yaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return ((i % ncat) == (icko % ncat))
		        })
		        .attr("class", "")

	        xaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return (i == Math.floor(icko / ncat))
		        })
		        .attr("class", "")
          })
          .on("click", function(d,i) {
            ids = [d['id2'],d['id1']];
            $('#modal').modal('show');
          });


      rect.append("rect")
          .attr("x",function(d) {return x(d.i1);})
          .attr("y",function(d) {return y(d.i2);})
          .attr("width",square['innersize'])
          .attr("height",square['innersize'])
          .style("fill",function(d) {return color(d.val);})
          .attr("class","rect");


      //add text inside
      rect.append("text")
	        .attr("text-anchor", "middle")
	        .text(function (d, i) {
		            return d.val;
	        })
	        .attr("x", function(d, i) {
		        return x(d.i1) + square['innersize']/2;
	        })
	        .attr("y", function(d, i) {
		        return y(d.i2) +  square['innersize']/2 + (square['size'] - square['innersize'])/2;
	        })
	        .attr("class","descr")
	        .attr("font-size", function () {return Math.floor(square['innersize']*.5)+"px"})
	        .on("mouseover", function (d,i) {

	        });

      //middle rects
      category = d3.range(category1.length-1);
      var grayrect = svg.selectAll(".grayrect")
          .data(category)
        .enter().append("rect")
          .attr("x",function(d) {
            return x(d);
          })
          .attr("y",function(d) {return y(d);})
          .attr("width",square['innersize'])
          .attr("height",square['innersize'])
          .attr("class",'middle-rect')
          ;
    });

    function matrix2data(matrix,order) {
      out = [];
      i = 0;
      for (key1 in order) {
        j = 0;
        for (key2 in order) {
          id1 = order[key1];
          id2 = order[key2];
          item = {
            'id1': id1,
            'id2': id2,
            'i1': i,
            'i2': j,
            'val': matrix[id1][id2]
          }
          out.push(item);
          j++;
        }
        i++;
      }
      return out;
    }
}

  var voted = Object.keys(user['vote']);  //http://stackoverflow.com/questions/3068534/getting-javascript-object-key-list


    data = addme(answers)
    var order = positions(data,qcoefs,voted); //array of ids
    var matrix = calculate(data);
    var category1 = data2category(data,order);

    $('a#tabs-comparison').on('shown.bs.tab', function (e) {
      showmatrix(matrix,order,category1);
    })



  function data2category(data,order) {
    out = [];
    for (key in order) {
      item = order[key];
      out.push(data[item]['short_name']);
    }
    return out;
  }

  function addme(data) {
    out = data;
    out['0'] = me;
    return out;
  }

  function positions(answers,qcoefs,voted) {
    //html = "";
    pos = [];
    for (key in answers) {
      pos.push([key,calc_position(answers[key]['vote'],voted,weights,qcoefs)]);
      //html += pos[key] + ' ';
    }
    pos.sort(function(a,b) {return a[1] - b[1];});  //array of "[id, d1]"s
    out = [];
    for (key in pos) {
      out.push(pos[key][0]);
    }
    return out;
  }

  function calc_position(voter,voted,weights,qcoefs) {
    s = 0;
    for (k in voted) {
      id = voted[k];
      if ((typeof (voter[id]) != 'undefined') && (typeof (qcoefs[id]) != 'undefined')) {
          if (typeof (weights[id]) != 'undefined') w = weights[id];
          else w = 1;
          s += voter[id] * w * qcoefs[id];
      }
    }
    return s;
  }

  function calculate(answers) {
    matrix = {}
    //html = "";
    for (key1 in answers) {
      for (key2 in answers) {
        if (
          typeof(matrix[answers[key1]['id']]) == 'undefined' ||
          typeof(matrix[answers[key1]['id']][answers[key2]['id']]) == 'undefined') {
          rn = Math.round(calc_match(answers[key1]['vote'],answers[key2]['vote'],voted,weights));
          if (typeof(matrix[answers[key1]['id']]) == 'undefined') {
            matrix[answers[key1]['id']] = {};
          }
          if (typeof(matrix[answers[key2]['id']]) == 'undefined') {
            matrix[answers[key2]['id']] = {};
          }
          matrix[answers[key1]['id']][answers[key2]['id']] = rn;
          matrix[answers[key2]['id']][answers[key1]['id']] = rn;
        }
        //html += rn + " ";
      }
      //html += "<br>";
    }
    //$("#matrix").html(html);
    return matrix;
  }

  function calc_match(voter1,voter2,voted,weights) {
    s = 0;
    c = 0;
    for (i in voted) {
      id = voted[i];
      if (typeof (voter1[id]) != 'undefined') {
        if (typeof (voter2[id]) != 'undefined') {
          if (typeof (weights[id]) != 'undefined') w = 2; //default weight is 2 weights[id];
          else w = 1;
          s += voter1[id] * voter2[id] * w;
          c += w;
        }
      }
    }
    if (c == 0) return rescale(0);
    else return rescale (s/c);
  }

  function rescale (num) {
    return (num + 1) * 50;
  }
