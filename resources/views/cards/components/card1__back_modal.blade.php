    <!-- Dados do Verso do cartão -->
    @if($order->code)
    <h4>Dados do <b>verso</b> do Cartão</h4>
    <br>
    <div class="form-group">
        <label>Codigo de Barras <span class="text-danger">*</span></label>
        <input type="number" name="back-input-0" class="form-control" min="1" max="99999999" required>
        <div class="invalid-feedback">O campo <b>Codigo de Barras</b> é necessário.</div>
    </div>
    @endif

   