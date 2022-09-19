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

$.ajax({
    url: "/countPenjualan",
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
        
        const sumProduksi = parseData.produksi.reduce((partialSum, a) => partialSum + a, 0);
        const sumPenjualan = parseData.penjualan.reduce((partialSum, a) => partialSum + a, 0);
        // const sumProyeksiPenjualan = parseData.proyeksi_penjualan.reduce((partialSum, a) => partialSum + a, 0);
        let sum = 0;
        let sumProyeksiPenjualan = 0;
        for (let i = 0; i < parseData.penjualan.length; i++) {
            console.log(parseData.penjualan[i], 'sum', sum)

            sum += parseData.penjualan[i];
        }

        for (let i = 0; i < parseData.proyeksi_penjualan.length; i++) {
            console.log(parseData.proyeksi_penjualan[i], 'sum', sumProyeksiPenjualan)

            sumProyeksiPenjualan += parseData.proyeksi_penjualan[i];
        }
        
        let sisa_produksi = sumProduksi - sumPenjualan;
        let persen = (sumPenjualan/sumProduksi) * 100;
        $('.total-penjualan-tertinggi').html(`${numberWithSeparator(penjualanTertinggi)} <span class="small text-muted">Unit</span>`)
        $('.total-penjualan-terendah').html(`${numberWithSeparator(penjualanTerendah)} <span class="small text-muted">Unit</span>`)
        $('.total-produksi-tertinggi').html(`${numberWithSeparator(produksiTertinggi)} <span class="small text-muted">Unit</span>`)
        $('.data-produksi-mobil').html(`${numberWithSeparator(sumProduksi)} <span class="small text-muted">Unit/Tahun</span>`)
        $('.data-penjualan').html(`${numberWithSeparator(sumPenjualan)} <span class="small text-muted">Unit/Tahun</span>`)
        $('.actual-sales').html(`${numberWithSeparator(sum)} <span class="small text-muted">Unit/Tahun</span>`)
        $('.forecast-sales').html(`${numberWithSeparator(sumProyeksiPenjualan.toFixed(0))} <span class="small text-muted">Unit/Tahun</span>`)
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
                    name:"Data Produksi",
                    data:parseData.produksi
                },{
                    name:"Data Penjualan",
                    data:parseData.penjualan
                }, {
                    name:"Proyeksi / Prediksi Produksi Mobil",
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
        
        

        var pieChartWidget,pieChartWidgetOptions={
            series: [...JSON.parse(parseData.jml)],
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
                labels:[...JSON.parse(parseData.tipe_mobil)],
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

    
    function numberWithSeparator(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
    }