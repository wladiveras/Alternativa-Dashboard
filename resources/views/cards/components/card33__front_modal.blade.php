    <h4 class="text-center">Arte da <b>frente</b> do cartão </h4><br><br>
    <input type="hidden" name="ignore-avatar" value="1"> 
    <input type="hidden" name="only-front" value="1"> 

    <div class="col-md-12">
        <div class="text-center form-group">
            <button class="btn btn-primary" onclick="document.getElementById('front-input-0').click()">Enviar arte</button>
            <input  name="front-input-0" id="front-input-0" type='file' style="display:none">
        </div>
    </div>
      
    <div class="mb-2 col-md-12">
        <img id="front-preview" src="{{ asset("assets/media/cards/example_layout.png") }}"
            alt="front-preview" style="display:block;margin:0 auto;width:213px;height:332px;border-radius:20px;border:black 1px solid">
    </div>