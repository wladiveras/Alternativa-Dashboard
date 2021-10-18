    <h4>Dados da <b>frente</b> do Cartão </h4>
   <!-- Start:: Photo -->
   <div class="image-input order-avatar image-input-empty image-input-outline" id="avatar-card" style="background-image: url({{ asset('assets/media/users/blank.png') }})">
   <div class="image-input-wrapper"></div>

   <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
       data-action="change" data-toggle="tooltip" title="" data-original-title="Mudar imagem">
       <i class="fa fa-pen icon-sm text-muted"></i>
       <input type="file" name="avatar" accept=".png, .jpg, .jpeg" required />
       <input type="hidden" name="profile_avatar_remove" />
       <div class="invalid-feedback"
           style="position:absolute;width:100px;left:-100px;top:-8px;font-weight:bold">
           Envie uma FOTO
       </div>
   </label>

   <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
       data-action="cancel" data-toggle="tooltip" title="Cancelar Imagem">
       <i class="ki ki-bold-close icon-xs text-muted"></i>
   </span>

   <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
       data-action="remove" data-toggle="tooltip" title="Remover Imagem">
       <i class="ki ki-bold-close icon-xs text-muted"></i>
   </span>
</div>
<!-- end:: Photo -->

<div class="form-group">
   <label>Nome <span class="text-danger">*</span></label>
   <input type="text" name="front-input-0" class="form-control" maxlength="21" required>
   <div class="invalid-feedback">O campo <b>Nome</b> é necessário.</div>
</div>

<div class="form-group">
   <label>Função <span class="text-danger">*</span></label>
   <input type="text" name="front-input-1" class="form-control" maxlength="21" required>
   <div class="invalid-feedback">O campo <b>Função</b> é necessário.</div>
</div>