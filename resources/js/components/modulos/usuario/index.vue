<template>
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">    
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
      <!--begin::Container-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Listado de Usuarios -->
            <div class="card card-custom card-stretch gutter-b">
              <!--begin::Header-->
              <div class="card-header border-0 py-5">
                <h3 class="card-title">Listado de Usuarios</h3>
                <h3 class="card-title align-items-start flex-column">
                  <!--begin::Form-->
                  <input
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Buscar"
                    v-model="paramBusqueda"
                    @keyup.enter="getListUsuarios"
                  />
                  <!--end::Form-->
                </h3>
                <div class="card-toolbar">
                  <router-link
                    class="
                      btn btn-sm btn-light-primary
                      font-weight-bolder font-size-sm
                      mr-3
                    "
                    :to="'/usuario-nuevo'"
                    >Nuevo Usuario
                  </router-link>
                  <!-- <a href="#" class="btn btn-sm btn-success font-weight-bolder font-size-sm mr-3">Nuevo Usuario</a> -->
                  <a
                    href="#"
                    class="
                      btn btn-sm btn-danger
                      font-weight-bolder font-size-sm
                    "
                    >Create</a
                  >
                </div>
              </div>
              <!--end::Header-->
              <!--begin::Body-->
              <div class="card-body pt-0 pb-3">
                <div class="tab-content">
                  <!--begin::Table-->
                  <div class="table-responsive">
                    <table
                      class="
                        table
                        table-head-custom
                        table-head-bg
                        table-borderless
                        table-vertical-center
                      "
                    >
                      <thead>
                        <tr class="text-left text-uppercase">
                          <th style="min-width: 250px" class="pl-7">nombre</th>
                          <th style="min-width: 100px">correo</th>
                          <th style="min-width: 100px">usuario</th>
                          <th style="min-width: 100px">estado</th>
                          <th style="min-width: 210px" class="pl-7">
                            acciones
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pl-0 py-1">
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50 symbol-light mr-4">
                                <span class="symbol-label">
                                  <img
                                    src="assets/media/svg/avatars/001-boy.svg"
                                    class="h-75 align-self-end"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <div>
                                <span
                                  class="
                                    text-dark-50
                                    font-weight-bolder
                                    text-hover-primary
                                    mb-1
                                    font-size-sm
                                    text-capitalize
                                  "
                                >
                                  david ramírez flores
                                </span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >ramzdave@gmail.com</span
                            >
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >deividz</span
                            >
                          </td>
                          <td>
                            <span
                              class="label label-success label-dot mr-2"
                            ></span>
                            <span
                              class="font-weight-bold text-success font-size-sm"
                              >Activo</span
                            >
                          </td>
                          <td class="pr-0 text-center">
                            <router-link :to="'/'" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-2">
                              <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <i class="far fa-address-card text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </router-link>
                            <router-link :to="'/'" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-2">
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="far fa-edit text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </router-link>
                            <router-link :to="'/'" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-2">
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-key text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </router-link>
                            <router-link :to="'/'" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-2">
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="fas fa-ban text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </router-link>
                            <router-link :to="'/'" class="btn btn-icon btn-light btn-hover-primary btn-sm mr-2">
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-check text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </router-link>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0 py-1">
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50 symbol-light mr-4">
                                <span class="symbol-label">
                                  <img
                                    src="assets/media/svg/avatars/001-boy.svg"
                                    class="h-75 align-self-end"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <div>
                                <span
                                  class="
                                    text-dark-50
                                    font-weight-bolder
                                    text-hover-primary
                                    mb-1
                                    font-size-sm
                                    text-capitalize
                                  "
                                >
                                  david ramírez flores
                                </span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >ramzdave@gmail.com</span
                            >
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >deividz</span
                            >
                          </td>
                          <td>
                            <span
                              class="label label-warning label-dot mr-2"
                            ></span>
                            <span
                              class="font-weight-bold text-warning font-size-sm"
                              >Inactivo</span
                            >
                          </td>
                          <td class="pr-0 text-center">
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <i class="fas fa-list text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                                mx-3
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="far fa-edit text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-key text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                                mx-3
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="fas fa-ban text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-check text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0 py-1">
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50 symbol-light mr-4">
                                <span class="symbol-label">
                                  <img
                                    src="assets/media/svg/avatars/001-boy.svg"
                                    class="h-75 align-self-end"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <div>
                                <span
                                  class="
                                    text-dark-50
                                    font-weight-bolder
                                    text-hover-primary
                                    mb-1
                                    font-size-sm
                                    text-capitalize
                                  "
                                >
                                  david ramírez flores
                                </span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >ramzdave@gmail.com</span
                            >
                          </td>
                          <td>
                            <span
                              class="
                                text-dark-50
                                font-weight-bolder
                                d-block
                                font-size-sm
                              "
                              >deividz</span
                            >
                          </td>
                          <td>
                            <span
                              class="
                                label label-lg label-light-warning label-inline
                              "
                              >Inactivo</span
                            >
                          </td>
                          <td class="pr-0 text-center">
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                <i class="fas fa-list text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                                mx-3
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="far fa-edit text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-key text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                                mx-3
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                <i class="fas fa-ban text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                            <a
                              href="#"
                              class="
                                btn btn-icon btn-light btn-hover-primary btn-sm
                              "
                            >
                              <span
                                class="svg-icon svg-icon-md svg-icon-primary"
                              >
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                <i class="fas fa-check text-primary"></i>
                                <!--end::Svg Icon-->
                              </span>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!--end::Table-->
                </div>
              </div>
              <!--end::Body-->
              <div class="card-footer">
                <!-- Paginacion -->
                <div class="row">
                  <div class="col-ms-12">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- PAginacion ends -->
              </div>
            </div>
            <!-- Listado de Usuarios end -->
          </div>
        </div>
      </div>
      <!--end::Container-->
    </div>
    <!--end::Entry-->
  </div>
</template>

<script>
export default {
  data(){
    return{
      paramBusqueda:'',
      listUsuarios:[],
      //utilizaremos la biblioteca de element.io
    }
  },
  methods:{
    getListUsuarios(){
      //ruta que contendra la peticion
      let url = '/administracion/usuario/getListarUsuarios';
      axios.get(url,{
        param:{
          'buscar':this.paramBusqueda
        }
      }).then(response => {
        console.log(response);
      })
    }
  }
};
</script>

<style>
</style>