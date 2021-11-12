@extends('layout.admin_pages')
@section('title', 'Trang chủ')

@section('content_admin')
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    @keyframes bake-pie {
        from {
            transform: rotate(0deg) translate3d(0, 0, 0);
        }
    }

    body {
        font-family: "Open Sans", Arial;
        background: #EEE;
    }

    main {
        width: 400px;
        margin: 30px auto;
    }

    section {
        margin-top: 30px;
    }

    .pieID {
        display: inline-block;
        vertical-align: top;
    }

    .pie {
        height: 200px;
        width: 200px;
        position: relative;
        margin: 0 30px 30px 0;
    }

    .pie::before {
        content: "";
        display: block;
        position: absolute;
        z-index: 1;
        width: 100px;
        height: 100px;
        background: #EEE;
        border-radius: 50%;
        top: 50px;
        left: 50px;
    }

    .pie::after {
        content: "";
        display: block;
        width: 120px;
        height: 2px;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
        margin: 220px auto;

    }

    .slice {
        position: absolute;
        width: 200px;
        height: 200px;
        clip: rect(0px, 200px, 200px, 100px);
        animation: bake-pie 1s;
    }

    .slice span {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        background-color: black;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        clip: rect(0px, 200px, 200px, 100px);
    }

    .legend {
        list-style-type: none;
        padding: 0;
        margin: 0;
        background: #FFF;
        padding: 15px;
        font-size: 13px;
        box-shadow: 1px 1px 0 #DDD,
            2px 2px 0 #BBB;
    }

    .legend li {
        width: 110px;
        height: 1.25em;
        margin-bottom: 0.7em;
        padding-left: 0.5em;
        border-left: 1.25em solid black;
    }

    .legend em {
        font-style: normal;
    }

    .legend span {
        float: right;
    }

    footer {
        position: fixed;
        bottom: 0;
        right: 0;
        font-size: 13px;
        background: #DDD;
        padding: 5px 10px;
        margin: 5px;
    }
</style>
<div class="content-wrapper">
    <!--<div class="row">
        <section class="content">
            <main>
                <h1>Biểu đồ động vật</h1>
                <p style="margin-left: 3.5rem;">Giá trị phần trăm từng loài.</p>
                <section>
                    <div class="pieID pie">

                    </div>
                    <ul class="pieID legend">
                        <li>
                            <em>Humans</em>
                            <span>718</span>
                        </li>
                        <li>
                            <em>Dogs</em>
                            <span>531</span>
                        </li>
                        <li>
                            <em>Cats</em>
                            <span>868</span>
                        </li>
                        <li>
                            <em>Slugs</em>
                            <span>344</span>
                        </li>
                        <li>
                            <em>Aliens</em>
                            <span>1145</span>
                        </li>
                    </ul>
                </section>

            </main>

        </section>
    </div>
</div>-->
<div class="row">
    <!-- Bước 1: khai báo thư viện Chart.js và BootrapCDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bước 2: Tạo một thẻ <Div> với <canvas> bên trong để hứng biểu đồ -->
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>
    @php($count_A=DB::table('dongvats')->where('gioi', 'LIKE', '%ANURA (Fischer, 1813)%')->count())
    <!-- Bước 3: Tùy biến biểu đồ và thay đổi số liệu -->
    <script>
        let myChart = document.getElementById('myChart').getContext('2d');
        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';
        let massPopChart = new Chart(myChart, {
            type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                labels: ['ANURA (Fischer, 1813)', 'SQUAMATA OPPEL, 18411', 'Động vật có dây sống (chordata)', 'GYMNOPHIONA (Muller, 1832)'],
                datasets: [{
                    label: 'Population',
                    data: [
                        $count_A,
                        181045,
                        153060,
                        106519,
                    ],
                    //backgroundColor:'green',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)'
                    ],
                    borderWidth: 1,
                    borderColor: '#777',
                    hoverBorderWidth: 3,
                    hoverBorderColor: '#000'
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Largest Cities In Massachusetts',
                    fontSize: 25
                },
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: '#000'
                    }
                },
                layout: {
                    padding: {
                        left: 50,
                        right: 0,
                        bottom: 0,
                        top: 0
                    }
                },
                tooltips: {
                    enabled: true
                }
            }
        });
    </script>
</div>
<script>
    function sliceSize(dataNum, dataTotal) {
        return (dataNum / dataTotal) * 360;
    }

    function addSlice(sliceSize, pieElement, offset, sliceID, color) {
        $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
        var offset = offset - 1;
        var sizeRotation = -179 + sliceSize;
        $("." + sliceID).css({
            "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
        });
        $("." + sliceID + " span").css({
            "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
            "background-color": color
        });
    }

    function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
        var sliceID = "s" + dataCount + "-" + sliceCount;
        var maxSize = 179;
        if (sliceSize <= maxSize) {
            addSlice(sliceSize, pieElement, offset, sliceID, color);
        } else {
            addSlice(maxSize, pieElement, offset, sliceID, color);
            iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
        }
    }

    function createPie(dataElement, pieElement) {
        var listData = [];
        $(dataElement + " span").each(function() {
            listData.push(Number($(this).html()));
        });
        var listTotal = 0;
        for (var i = 0; i < listData.length; i++) {
            listTotal += listData[i];
        }
        var offset = 0;
        var color = [
            "cornflowerblue",
            "olivedrab",
            "orange",
            "tomato",
            "crimson",
            "purple",
            "turquoise",
            "forestgreen",
            "navy",
            "gray"
        ];
        for (var i = 0; i < listData.length; i++) {
            var size = sliceSize(listData[i], listTotal);
            iterateSlices(size, pieElement, offset, i, 0, color[i]);
            $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
            offset += size;
        }
    }
    createPie(".pieID.legend", ".pieID.pie");
</script>
@endsection