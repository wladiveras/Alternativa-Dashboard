    <h4 class="text-center">Arte da <b>frente</b> do cartão </h4><br><br>
    <input type="hidden" name="ignore-avatar" value="1"> 
    <input type="hidden" name="only-front" value="1"> 

    <div class="col-md-12">
        <div class="form-group">
            <label for="front-art">Arte da frente</label>
            <input type="file"
                class="form-control-file uppy-input-label btn btn-light-primary btn-sm btn-bold"
                id="front_src" name="arts[]" multiple>
        </div>
    </div>
      
    <div class="mb-2 col-md-12">
        <img id="front_preview" src="{{ asset("assets/media/cards/example_layout.png") }}"
            alt="front_preview" style="display:block;margin:0 auto;width:213px;height:332px;border-radius:20px;border:black 1px solid">
    </div>