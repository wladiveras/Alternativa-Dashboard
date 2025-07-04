
<!-- Adiciona os estilos dos cartões -->
@section("front_style")
        <link href="{{ asset('assets/css/cards/'. $card_front->css) }}" rel="stylesheet" />
    @if($order->id_back > 0)
        <link href="{{ asset('assets/css/cards/'. $card_back->css) }}" rel="stylesheet" />
    @endif
@endsection

@foreach($order_data as $D)
<div class="float-left flip-container center" id="flip-toggle" ontouchstart="this.classList.toggle('hover');">
    
    <div class="flipper">
        <!-- front content -->
        <div class="front">
            <div class="watermark" style="top:0px">{{ env('APP_NAME') }}</div>
            <div class="watermark" style="top:80px">{{ env('APP_NAME') }}</div>
            <div class="watermark" style="top:160px">{{ env('APP_NAME') }}</div>
            <div class="watermark" style="top:240px">{{ env('APP_NAME') }}</div>

            <span class="element__tag1">{{ $D->front_input1 }}</span>
            <span class="element__tag2">{{ $D->front_input2 }}</span>
            <span class="element__tag3">{{ $D->front_input3 }}</span>
            <span class="element__tag4">{{ $D->front_input4 }}</span>
            <span class="element__tag5">{{ $D->front_input5 }}</span>
            <span class="element__tag6">{{ $D->front_input6 }}</span>
            <span class="element__tag7">{{ $D->front_input7 }}</span>
            <span class="element__tag8">{{ $D->front_input8 }}</span>
            <span class="element__tag9">{{ $D->front_input9 }}</span>
            <span class="element__tag10">{{ $D->front_input10 }}</span>
            <span class="element__tag11">{{ $D->front_input11 }}</span>
            <span class="element__tag12">{{ $D->front_input12 }}</span>

            @if($D->front_avatar)
                <img class="element-avatar" src="{{ asset('assets/media/users/'. $order->order_id .'/'. $D->front_avatar) }}"  @if($order->code == 35) width="213.54" height="332.59" @endif  />
            @endif

            @if($D->front_art)
                <img style=" position:absolute" src="{{ asset('assets/media/users/'. $order->order_id .'/'. $D->front_art) }}" width="213.54" height="332.59" />
            @else
                <img style=" position:absolute; @if($order->code == 35) z-index: 2; @endif" src="{{ asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_front) }}" width="213.54" height="332.59" />
            @endif
        </div>

        @if($order->id_back > 0)
          <!-- back content -->
          <div class="back">
              <div class="watermark" style="top:0px">
                  {{ env('APP_NAME') }}</div>
              <div class="watermark" style="top:80px">
                  {{ env('APP_NAME') }}</div>
              <div class="watermark" style="top:160px">
                  {{ env('APP_NAME') }}</div>
              <div class="watermark" style="top:240px">
                  {{ env('APP_NAME') }}</div>

              <span class="element__back1">{{ $D->back_input1 }}</span>
              <span class="element__back2">{{ $D->back_input2 }}</span>
              <span class="element__back3">{{ $D->back_input3 }}</span>
              <span class="element__back4">{{ $D->back_input4 }}</span>
              <span class="element__back5">{{ $D->back_input5 }}</span>
              <span class="element__back6">{{ $D->back_input6 }}</span>
              <span class="element__back7">{{ $D->back_input7 }}</span>
              <span class="element__back8">{{ $D->back_input8 }}</span>
              <span class="element__back9">{{ $D->back_input9 }}</span>
              <span class="element__back10">{{ $D->back_input10 }}</span>
              <span class="element__back11">{{ $D->back_input11 }}</span>
              <span class="element__back12">{{ $D->back_input12 }}</span>    
               
              @if($D->back_art)
              <img style="position:absolute;" src="{{ asset('assets/media/users/'. $order->order_id .'/'. $D->back_art) }}" width="213.54" height="332.59" />
              @else
                <img id="card" style="position: absolute" src="{{ asset('assets/media/cards/uploads/'. $order->order_id .'/'. $order->card_back) }}" width="213.54"height="332.59" />
              @endif
          </div>
        @else
        <div class="back">
            <img id="card" style="position: absolute" width="213.54"height="332.59" />
        </div>
        @endif
      </div>
  </div>                                    
@endforeach