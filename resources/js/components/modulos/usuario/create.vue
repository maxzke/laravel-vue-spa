<template>
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
      <!--begin::Container-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Registrar Nuevo Usuario -->
            <div class="card card-custom card-stretch gutter-b">
              <!--begin::Header-->
              <div class="card-header border-0 py-5">
                <h3 class="card-title">Registrar Nuevo Usuario</h3>
                <div class="card-toolbar">
                  <router-link
                    class="
                      btn btn-sm btn-light-warning
                      font-weight-bolder font-size-sm
                      mr-3
                    "
                    :to="'/usuario'"
                  >
                    <i class="fas fa-chevron-left"></i>
                    Volver
                  </router-link>
                </div>
              </div>
              <!--end::Header-->
              <!--begin::Body-->
              <div class="card-body pt-0 pb-3">
                <div class="tab-content">
                  <!--begin::form-->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                        />
                        <span class="form-text text-muted"
                          >Nombre y apellidos.</span
                        >
                      </div>
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input
                          type="password"
                          class="form-control form-control-sm"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre de Usuario</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                        />
                        <span class="form-text text-muted"
                          >Sin espacios en blanco.</span
                        >
                      </div>
                      <div class="form-group">
                        <label>Imagen</label>
                        <div></div>
                        <div class="custom-file">
                          <input
                            type="file"
                            class="custom-file-input"
                            accept="image/png, image/jpeg"
                          />
                          <label class="custom-file-label" for="customFile"
                            >Buscar...</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::form-->
                </div>
              </div>
              <!--end::Body-->
              <div class="card-footer">
                <button type="reset" class="btn btn-primary mr-2">
                  Submit
                </button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
              </div>
            </div>
            <!-- Registrar Nuevo Usuario end -->
          </div>
        </div>
      </div>

      <!--end::Container-->
    </div>
    <!--end::Entry-->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>