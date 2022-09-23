function generateData(e,t,o) { 
    for(var a=0,r=[];a<t;) { 
        var s=Math.floor(750*Math.random())+1
        i=Math.floor(Math.random()*(o.max-o.min+1))+o.min
        l=Math.floor(61*Math.random())+15
        r.push([s,i,l])
        a++
    }
    return r
}

     // option = [data.length+1]
     // option[i] = document.createElement('option')
     // option[i].text = '--PILIH--'
     // option[i].value = ''
     // listType.add(option[i])

     // i++
     // data.forEach(function (item) {
     // if(value2 != null) value_ = item[value] + ' - ' + item[value2]; else value_ = item[value];
     //      option[i] = document.createElement('option')
     //      option[i].text = value_
     //      option[i].value = item[key]
     //      if(id != null)
     //      {
     //           if(id == item[key])
     //           {
     //                option[i].selected = 'selected'
     //           }
     //      }
     //      listType.add(option[i])
     //      i++
     // })

var year_input = $('#input-year').val()

if(year_input === '') {
     countProduct($('#select-year').val())
} else {
     countProduct($('#select-year').val())
}

$('#select-year').on('change', function() {
     var year = $('#select-year').val()
     var select = document.getElementById('select-year');
     var text = select.options[select.selectedIndex].text;
     countProduct(year)
})

function countProduct(year) {
     $.ajax({
          url: "/countPenjualan/"+year,
          beforeSend: function( xhr ) {
               xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
          }
     })
     .done(function( data ) {
          console.log(JSON.parse(data))
          var parseData = JSON.parse(data)
          var penjualanTertinggi = Math.max(...parseData.penjualan)
          var penjualanTerendah = Math.min(...parseData.penjualan)
          var produksiTertinggi = Math.max(...parseData.produksi)
          
          var jml_tipe_mobil = parseData.jml[0] + parseData.jml[1] + parseData.jml[2]; 
          const sumProduksi = parseData.produksi.reduce((partialSum, a) => partialSum + a, 0);
          const sumPenjualan = parseData.penjualan.reduce((partialSum, a) => partialSum + a, 0);
          $('#div-chart').html('')
          $('#div-radial').html('')
          $('#div-pie').html('')
          $('#div-cartype').html('')

          var persentaseCar1 = ((parseData.jml[0]/jml_tipe_mobil) * 100).toFixed(0);
          var persentaseCar2 = ((parseData.jml[1]/jml_tipe_mobil) * 100).toFixed(0);
          var persentaseCar3 = ((parseData.jml[2]/jml_tipe_mobil) * 100).toFixed(0);
          var htmlCarType = '<div class="row align-items-center my-2">'+
                                   '<div class="col">'+
                                        '<strong>'+parseData.tipe_mobil[0]+'</strong>'+
                                        '<div class="my-0 text-muted small"></div>'+
                                   '</div>'+
                                   '<div class="col-auto">'+
                                        '<strong>'+persentaseCar1+' %</strong>'+
                                   '</div>'+
                                   '<div class="col-3">'+
                                        '<div class="progress" style="height: 4px;">'+
                                             '<div class="progress-bar" role="progressbar" style="width: '+persentaseCar1+'%" aria-valuenow="'+persentaseCar1+'" aria-valuemin="0" aria-valuemax="100"></div>'+
                                        '</div>'+
                                   '</div>'+
                              '</div>'+
                              '<div class="row align-items-center my-2">'+
                                   '<div class="col">'+
                                        '<strong>'+parseData.tipe_mobil[1]+'</strong>'+
                                        '<div class="my-0 text-muted small"></div>'+
                                   '</div>'+
                                   '<div class="col-auto">'+
                                        '<strong>'+persentaseCar2+'%</strong>'+
                                   '</div>'+
                                   '<div class="col-3">'+
                                        '<div class="progress" style="height: 4px;">'+
                                             '<div class="progress-bar" role="progressbar" style="width: '+persentaseCar2+'%" aria-valuenow="'+persentaseCar2+'" aria-valuemin="0" aria-valuemax="100"></div>'+
                                        '</div>'+
                                   '</div>'+
                              '</div>'+
                              '<div class="row align-items-center my-2">'+
                                   '<div class="col">'+
                                        '<strong>'+parseData.tipe_mobil[2]+'</strong>'+
                                        '<div class="my-0 text-muted small"></div>'+
                                   '</div>'+
                              '<div class="col-auto">'+
                                   '<strong>'+persentaseCar3+'%</strong>'+
                              '</div>'+
                              '<div class="col-3">'+
                                   '<div class="progress" style="height: 4px;">'+
                                        '<div class="progress-bar" role="progressbar" style="width: '+persentaseCar3+'%" aria-valuenow="'+persentaseCar3+'" aria-valuemin="0" aria-valuemax="100"></div>'+
                                   '</div>'+
                              '</div>';

          var html = '<div class="card shadow mb-4">'+
                         '<div class="card-body">'+
                              '<div class="row mt-1 align-items-center">'+
                                   '<div class="col-12 col-lg-4 text-left pl-4">'+
                                        '<p class="mb-1 small text-muted">Car Production Data</p>'+
                                        '<span class="h3 data-produksi-mobil">29019 Unit</span>'+
                                        '<p class="text-muted mt-2"></p>'+
                                   '</div>'+
                                   '<div class="col-6 col-lg-2 text-center py-4">'+
                                        '<p class="mb-1 small text-muted">Sales</p>'+
                                        '<span class="h3 data-penjualan">20391 <span class="small text-muted"> Unit /tahun</span></span><br />'+
                                   '</div>'+
                                   '<div class="col-6 col-lg-2 text-center py-4 mb-2">'+
                                        '<p class="mb-1 small text-muted">Highest Sales</p>'+
                                        '<span class="h3 total-penjualan-tertinggi">20812  <span class="small text-muted"> Unit /tahun</span></span><br />'+
                                   '</div>'+
                                   '<div class="col-6 col-lg-2 text-center py-4">'+
                                        '<p class="mb-1 small text-muted">Lowest Sales</p>'+
                                        '<span class="h3 total-penjualan-terendah">10921  <span class="small text-muted"> Unit /tahun</span></span><br />'+
                                   '</div>'+
                                   '<div class="col-6 col-lg-2 text-center py-4">'+
                                        '<p class="mb-1 small text-muted">Highest Production</p>'+
                                        '<span class="h3 total-produksi-tertinggi">19383</span><br />'+
                                   '</div>'+
                              '</div>'+
                              '<div class="chartbox mr-4">'+
                                   '<div id="areaChart"></div>'+
                              '</div>'+
                         '</div>'+
                    '</div>';

          $('#div-chart').html(html)
          $('#div-cartype').html(htmlCarType)


          var htmlPie = '<div id="chart-box" class="mt-3">'+
                              '<div id="pieChartWidget"></div>'+
                         '</div>';
          
          // const sumProyeksiPenjualan = parseData.proyeksi_penjualan.reduce((partialSum, a) => partialSum + a, 0);
          let sum = 0;
          let sumProyeksiPenjualan = 0;
          for (let i = 0; i < parseData.penjualan.length; i++) {
               sum += parseData.penjualan[i];
          }
     
          for (let i = 0; i < parseData.proyeksi_penjualan.length; i++) {
               sumProyeksiPenjualan += parseData.proyeksi_penjualan[i];
          }
          
          let sisa_produksi = sumProduksi - sumPenjualan;
          let persen = (sumPenjualan/sumProduksi) * 100;
          $('.total-penjualan-tertinggi').html(`${numberWithSeparator(penjualanTertinggi)} <span class="small text-muted">Unit</span>`)
          $('.total-penjualan-terendah').html(`${numberWithSeparator(penjualanTerendah)} <span class="small text-muted">Unit</span>`)
          $('.total-produksi-tertinggi').html(`${numberWithSeparator(produksiTertinggi)} <span class="small text-muted">Unit</span>`)
          $('.data-produksi-mobil').html(`${numberWithSeparator(sumProduksi)} <span class="small text-muted">Unit/Year</span>`)
          $('.data-penjualan').html(`${numberWithSeparator(sumPenjualan)} <span class="small text-muted">Unit/Year</span>`)
          $('.actual-sales').html(`${numberWithSeparator(sum)} <span class="small text-muted">Unit/Year</span>`)
          $('.forecast-sales').html(`${numberWithSeparator(sumProyeksiPenjualan.toFixed(0))} <span class="small text-muted">Unit/Year</span>`)
          $('.sisa-produksi').html(`${numberWithSeparator(sisa_produksi)} <span class="small text-muted">Unit</span>`)
          // var areachart,areaChartOptions={
          //     series:[
          //     {
          //         name:"Data Produksi",
          //         data:parseData.produksi
          //     },{
          //         name:"Data Penjualan",
          //         data:parseData.penjualan
          //     }, {
          //         name:"Proyeksi / Prediksi Produksi Mobil",
          //         data:parseData.proyeksi
          //     },
               
          // ],
          // chart:{
          //     type:"area",
          //     height:350,
          //     background:"transparent",
          //     stacked:!0,
          //     toolbar:{show:!1},
          //     zoom:{enabled:!1}
          // },
          // theme:{
          //     mode:colors.chartTheme
          // },
          // xaxis:{
          //     type:"datetime",
          //     categories:parseData.time,
          //     labels:{
          //         show:!0,
          //         trim:!1,
          //         minHeight:void 0,
          //         maxHeight:120,
          //         style:{
          //             colors:colors.mutedColor,
          //             cssClass:"text-muted",
          //             fontFamily:base.defaultFontFamily
          //         }
          //     },
          //     axisBorder:{show:!1},
          //     tooltip:{enabled:!1,offsetX:0}
          // },
          // yaxis:{
          //     labels:{
          //         show:!0,
          //         trim:!1,
          //         offsetX:-10,
          //         minHeight:void 0,
          //         maxHeight:120,
          //         style:{
          //             colors:colors.mutedColor,
          //             cssClass:"text-muted",
          //             fontFamily:base.defaultFontFamily
          //         }
          //     }
          // },
          // markers:{
          //     size:0,
          //     strokeColors:"#fff",
          //     strokeWidth:0,
          //     strokeOpacity:.9,
          //     strokeDashArray:0,
          //     fillOpacity:1,
          //     discrete:[],
          //     shape:"circle",
          //     radius:2,
          //     offsetX:0,
          //     offsetY:0,
          //     onClick:void 0,
          //     onDblClick:void 0,
          //     showNullDataPoints:!0,
          //     hover:{
          //         size:void 0,
          //         sizeOffset:3
          //     }
          // },
          // colors:chartColors,
          // dataLabels:{enabled:!1},
          // stroke:{
          //     curve:"smooth",
          //     lineCap:"round",
          //     width:0
          // },
          // fill:{type:"solid"},
          // legend:{
          //     show:!1,
          //     position:"bottom",
          //     fontFamily:base.defaultFontFamily,
          //     fontWeight:400,
          //     labels:{
          //         colors:colors.mutedColor,
          //         useSeriesColors:!1
          //     },
          //     markers:{
          //         width:10,
          //         height:10,
          //         strokeWidth:0,
          //         strokeColor:"#fff",
          //         radius:6
          //     },
          //     itemMargin:{
          //         horizontal:10,
          //         vertical:0
          //     },
          //     onItemClick:{toggleDataSeries:!0},
          //     onItemHover:{highlightDataSeries:!0}
          // },
          // grid:{
          //     show:!0,
          //     borderColor:colors.borderColor,
          //     strokeDashArray:0,
          //     position:"back",
          //     xaxis:{
          //         lines:{show:!1}},
          //         yaxis:{
          //             lines:{show:!0}},
          //             row:{
          //                 colors:void 0,
          //                 opacity:.5
          //             },
          //             column:{
          //                 colors:void 0,
          //                 opacity:.5
          //             },
          //             padding:{
          //                 top:0,
          //                 right:0,
          //                 bottom:0,
          //                 left:0
          //             }
          //         },
          //         tooltip:{
          //             style:{
          //                 fontSize:"12px",
          //                 fontFamily:base.defaultFontFamily
          //             }
          //         }
          //     },
          //     areachartCtn=document.querySelector("#areaChart");
          //     areachartCtn&&(areachart=new ApexCharts(areachartCtn,areaChartOptions)).render();
          // $("#areaChart").load(location.href);
          var htmlRadial = '<div class="card shadow eq-card mb-4">'+
                              '<div class="card-body">'+
                                   '<div class="chart-widget mb-2">'+
                                        '<div id="radialbar"></div>'+
                                   '</div>'+
                                   '<div class="row items-align-center">'+
                                        '<div class="col-12 text-center">'+
                                             '<p class="text-muted mb-1">Remaining Production This Year</p>'+
                                             '<h6 class="mb-1 sisa-produksi">$1,823</h6>'+
                                        '</div>'+
                                   '</div>'+
                              '</div> '+
                         '</div>';
          $('#div-radial').html(htmlRadial)
          $('#div-pie').html(htmlPie)
          var radialbarChart,
               radialbarOptions={
                    series:[persen.toFixed(0)],
                    chart:{
                         height:200,
                         type:"radialBar"
                    },
                    plotOptions:{
                         radialBar:{
                              hollow:{
                              size:"75%"
                              },
                              track:{
                              background:colors.borderColor
                              },
                              dataLabels:{
                              show:!0,
                              name:{
                                   fontSize:"0.875rem",
                                   fontWeight:400,
                                   offsetY:-10,
                                   show:!0,
                                   color:colors.mutedColor,
                                   fontFamily:base.defaultFontFamily
                              },
                              value:{
                                   formatter:function(e){
                                        return parseInt(e)
                                   },
                                   color:colors.headingColor,
                                   fontSize:"1.53125rem",
                                   fontWeight:700,
                                   fontFamily:base.defaultFontFamily,
                                   offsetY:5,
                                   show:!0
                              },
                              total:{
                                   show:!0,
                                   fontSize:"0.875rem",
                                   fontWeight:400,
                                   offsetY:-10,
                                   label:"Percent",
                                   color:colors.mutedColor,
                                   fontFamily:base.defaultFontFamily
                              }
                              }
                         }
                    },
                    fill:{
                         type:"gradient",
                         gradient:{
                              shade:"light",
                              type:"diagonal2",
                              shadeIntensity:.2,
                              gradientFromColors:[extend.primaryColorLighter],
                              gradientToColors:[extend.primaryColorDark],
                              inverseColors:!0,
                              opacityFrom:1,
                              opacityTo:1,
                              stops:[20,100]
                         }
                    },
                    stroke:{
                         lineCap:"round"
                    },
                    labels:["CPU"]
               },
               radialbar=document.querySelector("#radialbar");
               radialbar&&(radialbarChart=new ApexCharts(radialbar,radialbarOptions)).render();


          var areachart,areaChartOptions={
               series:[
                    {
                         name:"Production Data",
                         data:parseData.produksi
                    },{
                         name:"Sales",
                         data:parseData.penjualan
                    }, {
                         name:"Car Production Prediction",
                         data:parseData.proyeksi
                    },],
               chart:{
                    height:350,
                    type:"line",
                    background:!1,
                    zoom:{enabled:!1},
                    toolbar:{show:!1}},
                    theme:{mode:colors.chartTheme},
                    stroke:{
                         show:!0,
                         curve:"smooth",
                         lineCap:"round",
                         colors:chartColors,
                         width:[3,2,3],
                         dashArray:[0,0,0]},
                         dataLabels:{enabled:!1},
                         responsive:[{
                         breakpoint:480,
                         options:{
                              legend:{
                                   position:"bottom",
                                   offsetX:-10,
                                   offsetY:0
                              }
                         }
                         }],
                         markers:{
                         size:4,
                         colors:base.primaryColor,
                         strokeColors:colors.borderColor,
                         strokeWidth:2,
                         strokeOpacity:.9,
                         strokeDashArray:0,
                         fillOpacity:1,
                         discrete:[],
                         shape:"circle",
                         radius:2,
                         offsetX:0,
                         offsetY:0,
                         onClick:void 0,
                         onDblClick:void 0,
                         showNullDataPoints:!0,
                         hover:{
                              size:void 0,
                              sizeOffset:3
                         }
                         },
                         xaxis:{
                         type:"datetime",
                         categories:parseData.time,
                         labels:{
                              show:!0,
                              trim:!1,
                              minHeight:void 0,
                              maxHeight:120,
                              style:{
                                   colors:colors.mutedColor,
                                   cssClass:"text-muted",
                                   fontFamily:base.defaultFontFamily
                              }
                         },
                         axisBorder:{show:!1}
                         },
                         yaxis:{
                         labels:{
                              show:!0,
                              trim:!1,
                              offsetX:-10,
                              minHeight:void 0,
                              maxHeight:120,
                              style:{
                                   colors:colors.mutedColor,
                                   cssClass:"text-muted",
                                   fontFamily:base.defaultFontFamily
                              }
                         }
                         },
                         legend:{
                         position:"top",
                         fontFamily:base.defaultFontFamily,
                         fontWeight:400,
                         labels:{
                              colors:colors.mutedColor,
                              useSeriesColors:!1
                         },
                         markers:{
                              width:10,
                              height:10,
                              strokeWidth:0,
                              strokeColor:colors.borderColor,
                              fillColors:chartColors,
                              radius:6,
                              customHTML:void 0,
                              onClick:void 0,
                              offsetX:0,
                              offsetY:0
                         },
                         itemMargin:{
                              horizontal:10,
                              vertical:0
                         },
                         onItemClick:{
                              toggleDataSeries:!0
                         },
                         onItemHover:{
                              highlightDataSeries:!0
                         }
                         },
                         grid:{
                         show:!0,
                         borderColor:colors.borderColor,
                         strokeDashArray:0,
                         position:"back",
                         xaxis:{
                              lines:{show:!1}
                         },
                         yaxis:{
                              lines:{show:!0}
                         },
                         row:{
                              colors:void 0,
                              opacity:.5
                         },
                         column:{
                              colors:void 0,
                              opacity:.5
                         },
                         padding:{
                              top:0,
                              right:0,
                              bottom:0,
                              left:0
                         }
                         }
                    },
          lineChartCtn=document.querySelector("#areaChart");
          lineChartCtn&&(areachart=new ApexCharts(lineChartCtn,areaChartOptions)).render();
          
          console.log(areaChartOptions, 'area chart')
     
          var pieChartWidget,pieChartWidgetOptions={
               series: [parseData.jml[0], parseData.jml[1], parseData.jml[2]],
               chart:{
                    type:"pie",
                    height:160,
                    zoom:{enabled:!1},
                    toolbar:{show:!1}
               },
               theme:{mode:colors.chartTheme},
               plotOptions:{
                    pie:{
                         donut:{size:"0"},
                         expandOnClick:!1}
                    },
                    labels:[parseData.tipe_mobil[0], parseData.tipe_mobil[1], parseData.tipe_mobil[2]],
                    dataLabels:{
                         enabled:!0,
                         style:{
                         fontSize:"10px",
                         fontFamily:base.defaultFontFamily,
                         fontWeight:"300"
                         }
                    },
                    legend:{show:!1},
                    stroke:{
                         show:!1,
                         colors:extend.primaryColorLight,
                         width:1,
                         dashArray:0
                    },
                    fill:{
                         opacity:1,
                         colors:chartColors
                    }
               },
     
               pieChartWidgetCtn=document.querySelector("#pieChartWidget");
               pieChartWidgetCtn&&(pieChartWidget=new ApexCharts(pieChartWidgetCtn,pieChartWidgetOptions)).render();
     })
}


    
function numberWithSeparator(x) {
     return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}