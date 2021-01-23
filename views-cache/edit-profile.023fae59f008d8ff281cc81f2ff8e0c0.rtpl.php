<?php if(!class_exists('Rain\Tpl')){exit;}?>        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Dados Cadastrais</h3>
                </div>
                <div class="col-6">
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active"> Alterar dados</li>
                  </ol> -->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Meu dados</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-2">
                          <div class="col-auto"><img class="img-70 rounded-circle" alt="" src="res/assets/images/user/7.jpg"></div>
                          <div class="col">
                            <h3 class="mb-1">NOME CLIENTE</h3>
                            <p class="mb-4">PLANO: VISTO E1</p>
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <h6 class="form-label">Bio</h6>
                          <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label class="form-label">Email-Address</label>
                          <input class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <!-- <div class="form-group mb-3">
                          <label class="form-label">Password</label>
                          <input class="form-control" type="password" value="password">
                        </div>
                        <div class="form-group mb-3">
                          <label class="form-label">Website</label>
                          <input class="form-control" id="sitecliente" placeholder="http://Uplor .com">
                        </div>
                        <div class="form-group mb-3">
                          <label class="form-label">Nome de usuário</label><br />
                          <a href="#" id="username" data-type="text" data-pk="1" data-url="" data-title="Enter username">superuser</a>
                        </div> -->
                        <div class="form-footer">
                          <button class="btn btn-primary btn-block">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <form class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Meus dados</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group mb-3">
                            <label class="form-label">Company</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control" type="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group mb-3">
                            <label class="form-label">Last Name</label>
                            <input class="form-control" type="text" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Home Address">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group mb-3">
                            <label class="form-label">City</label>
                            <input class="form-control" type="text" placeholder="City">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group mb-3">
                            <label class="form-label">Postal Code</label>
                            <input class="form-control" type="number" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-control btn-square">
                              <option value="0">--Select--</option>
                              <option value="1">Germany</option>
                              <option value="2">Canada</option>
                              <option value="3">Usa</option>
                              <option value="4">Aus</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-3 mb-0">
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Arquivos enviados</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="table-responsive add-project">
                      <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                          <tr>
                            <th>Documento</th>
                            <th>Data envio</th>
                            <th>Status</th>
                            <th>Observações</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a class="text-inherit" href="#">Foto Passaporte 001</a></td>
                            <td>08 Jan 2021 15:45</td>
                            <td><span class="status-icon bg-success"></span> Aprovado</td>
                            <td>N/D</td>
                            <td class="text-center">
                              <a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-upload"></i> Upĺoad</a>
                            </td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Foto Carteira de Motorista</a></td>
                            <td>08 Jan 2021 15:53</td>
                            <td><span class="status-icon bg-danger"></span> Ilegível</td>
                            <td>Imagem esta borrada</td>
                            <td class="text-center">
                              <a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-upload"></i> Upĺoad</a>
                            </td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Foto RG (identidade)</a></td>
                            <td>09 Jan 2021 08:17</td>
                            <td><span class="status-icon bg-warning"></span> Aprovado</td>
                            <td>N/D</td>
                            <td class="text-center">
                              <a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-upload"></i> Upĺoad</a>
                            </td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Foto Comprovante de Endereço</a></td>
                            <td>12 Jan 2021 12:11</td>
                            <td><span class="status-icon bg-warning"></span> Aprovado</td>
                            <td>N/D</td>
                            <td class="text-center">
                              <a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-upload"></i> Upĺoad</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
