<?php $v->layout("layouts/_theme"); ?>
<!-- ============================== SIDEBAR ============================== -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ============================== HEADING ============================== -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-chart-pie fa-icon-active"></i>
            </div>
            <div>Analise administrativa
                <div class="page-title-subheading">
                    Página administrativa geral do sistema.
                </div>
            </div>
        </div>

        <div class="page-title-actions">

            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>

            <div class="d-inline-block dropdown">

                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>

                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                                            Inbox
                                                        </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                                            Book
                                                        </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                                            Picture
                                                        </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                                            File Disabled
                                                        </span>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- ============================== BUTTON TOP ============================== -->
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            ;   <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Usuários</div>
                    <div class="widget-subheading">Total geral no sistema</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?= count($users) ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== LIST USERS ============================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Usuários
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <button class="active btn btn-focus">Última 5 usuários</button>
                        <button class="btn btn-focus">Carregar todos</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="text-center">City</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <div class="widget-content p-0 ml-3">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="<?= asset("assets/admin/images/avatars/4.jpg"); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading"><?= $user->first_name . " " . $user->last_name; ?></div>
                                            <div class="widget-subheading opacity-7">Web Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Porto Alegre</td>
                            <td class="text-center">
                                <div class="badge badge-warning">Pending</div>
                            </td>
                            <td class="text-center">
                                <a type="button" href="<?= $router->route("admin.user", ["user"=> $user->id]); ?>" class="btn-sm btn-warning">
                                    Detalhes
                                </a>
                                <a type="button" href="<?= $router->route("admin.user", ["user"=> $user->id]); ?>" class="btn-sm btn-danger">
                                    Deletar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">
            </div>
        </div>
    </div>
</div>

<!-- ============================== CONTENT GRAFIC ============================== -->
<div class="row">

</div>
