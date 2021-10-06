@extends("layouts.printer")
<!-- ESSA PAGINA VAI SERVIR PARA FAZER O DOWNLOAD DO PDF, O LINK VAI SER LISTADO PRA PRODUÇÃO, E AO CLICAR ABRE A PAGINA SALVA O PDF E FECHA A PAGINA-->
@section("style")
<link href="{{ asset('assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/pages/cards/card-1.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")

<!--begin::Content-->
<div id="container-data" data-spy="scroll" data-target="#navigation">

    <div id="item-pages" class="item-pages print-invert " style="position:absolute;left:10px;top:10px">

        <!-- FRENTE -->
		@for ($i = 1; $i < 11; $i++) 
         <div class="print-flip-container center float-left" id="flip-toggle">
                <div class="print-flipper">
					
                    <div class="print-front">
                        <b class="print-name-title">Wladi Veras {{ $i }}</b>
                        <span class="print-sub-title">Desenvolvedor Web</span>

                        <img class="print-element-avatar" src="{{ asset("assets/media/users/100_10.jpg") }}" width='100' height='110'>
                        <img class="element-background" src="{{ asset("assets/media/cards/FRENTE.png") }}" style="position:absolute" width='262' height='395' />
                    </div>
                </div>
            </div>

            @if($i == 5)
            <div class="clearfix"></div>
            @endif

            @endfor
		

        <!-- VERSO 
        @for ($i = 1; $i < 11; $i++) <div class="flip-container center float-left" id="flip-toggle">
            <div class="print-flipper">

                <div class="print-front">
    
                    
					<div class="print-element-code">
						{!! DNS1D::getBarcodeHTML('179577', 'I25') !!}     
					</div>
                    <img class="element-background" style="position:absolute" width='262' height='395' />
                </div>
            </div>
    </div>

    @if($i == 5)
    <div class="clearfix"></div>
    @endif


    @endfor
-->



</div>

<div class="clearfix"></div>


</div>
<!--end::Content-->
<button id="cmd">print div</button>

@endsection

@section("script")

<script src="{{ asset('assets/js/pages/features/custom/base64.convert.js') }}"></script>
<script src="{{ asset('assets/js/pages/features/jsPDF/jspdf.min.js') }}"></script>
<script>
    $('#cmd').click(function () {
        var options = {
            pagesplit: false, //Adding page breaks manually using pdf.addPage();
            background: '#fff' //White Background.
        };
        var pdf = new jsPDF('a4', 'mm', [297, 210]);
        pdf.addHTML($("#item-pages"), 0, 0, options, function () {
            pdf.save('PRINT.pdf');
        });
    });

    $(document).ready(function () {
		//convertImgToBase64('{{ asset("assets/media/cards/VERSO.png") }}', function (base64Img) {
        //    $(".element-background").attr("src", base64Img);
        //});
    });

</script>



@endsection
