
 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <title>
    GK Admin - PORTAL UP MAIS    </title>
    <meta name="description" content="GK Admin - Sistema de gerenciamento de fluxo de caixa - Geek Sistemas">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="../assets_coloradmin/img/logo/logo.png">

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../../assets_coloradmin/css/vendor.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/css/default/app.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/css/default/theme/orange.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="../../assets_coloradmin/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="../../assets_coloradmin/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../../assets_coloradmin/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <!-- <link href="../../assets_coloradmin/plugins/superbox/superbox.min.css" rel="stylesheet" />
    <link href="../../assets_coloradmin/plugins/@fullcalendar/common/main.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/@fullcalendar/daygrid/main.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/@fullcalendar/timegrid/main.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/@fullcalendar/list/main.min.css" rel="stylesheet" />
	<link href="../../assets_coloradmin/plugins/@fullcalendar/bootstrap/main.min.css" rel="stylesheet" />
    <link href="../../assets_coloradmin/plugins/summernote/dist/summernote-lite.css" rel="stylesheet" /> -->
    <!-- <link href="../../assets_coloradmin/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" /> -->
    
	<!-- ================== END page-css ================== -->

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet"> -->


</head>
 <body>
   	<!-- BEGIN #loader -->
    <!-- <div id="loader" class="app-loader">
      <span class="spinner"></span>
    </div> -->
    <!-- END #loader -->
   <!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
    <style>
    .float-custom{
        position:fixed;
        width:50px;
        height:50px;
        bottom:40px;
        right:40px;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float{
        margin-top:22px;
    }
</style><!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN navbar-header -->
    <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>GK</b> Admin</a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- END navbar-header -->
    <!-- BEGIN header-nav -->
    <div class="navbar-nav">
        <!-- <div class="navbar-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
                <i class="fa fa-bell"></i>
                <span class="badge"></span>
            </a>
            <div class="dropdown-menu media-list dropdown-menu-end" style="max-height: 90vh !important; overflow-y: auto">
                <div class="dropdown-header"> Notificações</div>
                                    <a href="?pagApagar=" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-dollar-sign media-object bg-gray-500"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"> <i class="fa fa-exclamation-circle text-danger"></i></h6>
                            <h6 class="media-heading"></h6>
                            <div class="text-muted fs-10px"></div>
                        </div>
                    </a>
                            </div>
        </div> -->
        
        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                <img src="../../assets_coloradmin/img/avatares/36.jpg" alt="" /> 
                <span>
                    <span class="d-none d-md-inline">Maicon Gabriel</span>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-1">
                <a href="?profile" class="dropdown-item">Editar perfil</a>
                                                <div class="dropdown-divider"></div>
                <a href="components/login/action/logout.php" class="dropdown-item">Sair</a>
            </div>
        </div>
    </div>
    <!-- END header-nav -->
</div>
<!-- END #header -->
<!-- BEGIN Left Aside -->
<div id="sidebar" class="app-sidebar">
   <!-- BEGIN scrollbar -->
   <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                            Maicon Gabriel                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>PORTAL UP MAIS</small>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="?profile" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Perfil</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>

        <div class="menu-header">MENU</div>
<div class="menu-item menu_home">
    <a href="index.php" class="menu-link">
        <div class="menu-icon">
            <i class="fa fa-home"></i> 
        </div>
        <div class="menu-text">Início</div>
    </a>
</div>
<div class="menu-item has-sub menu_pessoa">
    <a href="javascript:;" class="menu-link">
        <div class="menu-icon">
            <i class="fa fa-users"></i>
        </div>
        <div class="menu-text">Alunos</div>
        <div class="menu-caret"></div>
    </a>
    <div class="menu-submenu">
        <div class="menu-item menu-subitem submenu_pessoa_1">
            <a href="?consPessoa" class="menu-link"><div class="menu-text">Alunos</div></a>
        </div>
        <div class="menu-item menu-subitem submenu_pessoa_2">
            <a href="?consAlunoNota=1" class="menu-link"><div class="menu-text">Notas</div></a>
        </div>
    </div>
</div>
<div class="menu-item has-sub menu_turma">
    <a href="?consTurma=1" class="menu-link">
        <div class="menu-icon">
            <i class="fa fa-graduation-cap"></i>
        </div>
        <div class="menu-text">Turmas</div>
    </a>
</div>
<div class="menu-item has-sub menu_atividade">
    <a href="javascript:;" class="menu-link">
        <div class="menu-icon">
            <i class="fa fa-file-pdf"></i>
        </div>
        <div class="menu-text">Atividades</div>
        <div class="menu-caret"></div>
    </a>
    <div class="menu-submenu">
        <div class="menu-item menu-subitem submenu_atividade_1">
            <a href="?consAtividade=1" class="menu-link"><div class="menu-text">Cadastradas</div></a>
        </div>
        <div class="menu-item menu-subitem submenu_atividade_2">
            <a href="?consAtividadeAluno=1" class="menu-link"><div class="menu-text">Enviadas</div></a>
        </div>
        <div class="menu-item menu-subitem submenu_atividade_3">
            <a href="?consResposta=1" class="menu-link"><div class="menu-text">Resoluções</div></a>
        </div>
    </div>
</div>

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar --> <!-- the #js-page-content id is needed for some plugins to initialize -->
<div id="content" class="app-content">
    <div class="panel panel-inverse">

    <div class="panel-heading ui-sortable-handle">
        <h4 class="panel-title">Notificações <span class="badge bg-success ms-5px">0</span></h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"
                data-tooltip-init="true"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                    class="fa fa-minus"></i></a>
            <a href="javascript:;" id="btnDeleteAllNotifications" class="btn btn-xs btn-icon btn-danger" ><i
                    class="fa fa-times"></i></a>
        </div>
    </div>


    <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped mb-0 align-middle">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Hora</th>
                        <th width="1%">#</th>
                    </tr>
                </thead>
                <tbody>
                                    </tbody>
            </table>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    const USER_ID = "1261572145637f72519c558";
    $(document).on("click", "#btnDeleteAllNotifications", function(e) {
        e.preventDefault();
        swal({
            title: "Apagar todas as notificações?",
            icon: 'warning',
            buttons: {
            cancel: {
                text: 'Não',
                value: 'cancel',
                visible: true,
                className: 'btn btn-default',
                closeModal: true,
            },
            confirm: {
                text: 'Sim',
                value: 'proceed',
                visible: true,
                className: 'btn btn-primary',
                closeModal: true
            }
            }
        })
        .then(function(result) {
            switch (result) {
            case "cancel":
            swal({
                icon: 'info',
                text: "Ufa! Seus dados estão a salvo."
            });
            break;

            case 'proceed':
                $.post("components/notificacao/action/excluir_notificacao_user.php", 'id='+USER_ID,
                function(data) {
                    debugger
                    if (data!= null && data != false) {
                        swal({
                            icon: 'success',
                            text: "Notificações apagadas com sucesso."
                        });
                        location.reload();
                    }else{
                        swal({
                            icon: 'danger',
                            text: "Um erro ocorreu, impossível apagar as notificações."
                        });
                    }

                }, "html");
                
            break;

            default:
            swal({
                icon: 'info',
                text: "Ufa! Seus dados estão a salvo."
            });
            }
        })
        .catch(err => {
            if(err){
                swal({
                    icon: 'danger',
                    text: "Um erro ocorreu, impossível apagar as notificações."
                });
            } else {
                swal.stopLoading();
                swal.close();
            }
        });

    });
    $(document).on("click", ".BtnDeleteNotification", function(e) {
        e.preventDefault();
        $.post("components/notificacao/action/excluir_notificacao.php", $(this).val(),
        function(data) {
            debugger
            if (data != null && data != false) {
                location.reload();
            }

        }, "html");
                
    });
});
</script>
        <!-- <div id="footer" class="app-footer m-0">
            <div class="row">
                <span>
                    <a href="#" class="text-decoration-none link-success me-5px mb-5px">André Braga - Sistemas e Aplicativos</a>
                    <a href="https://wa.me/5531988778860" class="btn btn-social-icon btn-adn float-start me-5px mb-5px"><span class="fab fa-whatsapp"></span></a>
                    <a href="https://geeksistemas.com.br#contact" class="btn btn-social-icon btn-bitbucket float-start me-5px mb-5px"><span class="fa fa-envelope"></span></a>
                    <a href="tel:31988778860" class="btn btn-social-icon btn-dropbox float-start me-5px mb-5px"><span class="fa fa-phone-alt"></span></a>
                </span>
            </div>
        </div> -->

 </div>
<!-- BEGIN theme-panel -->
<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
				<!-- BEGIN theme-list -->
				<div class="theme-list">
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme="red" data-theme-file="../assets_coloradmin/css/default/theme/red.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Vermelho">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme="pink" data-theme-file="../assets_coloradmin/css/default/theme/pink.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Rosa">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme="orange" data-theme-file="../assets_coloradmin/css/default/theme/orange.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Laranja">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme="yellow" data-theme-file="../assets_coloradmin/css/default/theme/yellow.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Amarelo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme="lime" data-theme-file="../assets_coloradmin/css/default/theme/lime.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Limão">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme="green" data-theme-file="../assets_coloradmin/css/default/theme/green.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Verde">&nbsp;</a></div>
					<div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme="default" data-theme-file="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Padrão">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme="cyan" data-theme-file="../assets_coloradmin/css/default/theme/cyan.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Ciano">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme="blue" data-theme-file="../assets_coloradmin/css/default/theme/blue.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Azul">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme="purple" data-theme-file="../assets_coloradmin/css/default/theme/purple.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Roxo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme="indigo" data-theme-file="../assets_coloradmin/css/default/theme/indigo.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme="black" data-theme-file="../assets_coloradmin/css/default/theme/black.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Preto">&nbsp;</a></div>
				</div>
				<!-- END theme-list -->
				
				<div class="theme-panel-divider"></div>
				
				<!-- BEGIN theme-switch -->
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Cabeçalho fixo</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Cabeçalho invertida</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Menu fixo</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Divisor do menu</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
							<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-md-8 control-label text-inverse fw-bold">Gradiente</div>
					<div class="col-md-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>
				<!-- END theme-switch -->		
				<div class="theme-panel-divider"></div>
				
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Resetar config.</b></a>
			</div>
		</div>
		<!-- END theme-panel -->
   </div>
   <!-- END app -->
   	<!-- ================== BEGIN core-js ================== -->
	<script src="../../assets_coloradmin/js/vendor.min.js"></script>
	<script src="../../assets_coloradmin/js/app.min.js"></script>
	<script src="../../assets_coloradmin/js/theme/default.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../../assets_coloradmin/plugins/d3/d3.min.js"></script>
	<script src="../../assets_coloradmin/plugins/nvd3/build/nv.d3.min.js"></script>
	<script src="../../assets_coloradmin/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../../assets_coloradmin/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<!-- <script src="../../assets_coloradmin/plugins/apexcharts/dist/apexcharts.min.js"></script> -->
	<script src="../../assets_coloradmin/plugins/moment/min/moment.min.js"></script>
	<script src="../../assets_coloradmin/plugins/moment/locale/pt-br.js"></script>
	<script src="../../assets_coloradmin/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../../assets_coloradmin/js/theme/default.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
	<script src="../../assets_coloradmin/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
	<!-- <script src="../../assets_coloradmin/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="../../assets_coloradmin/plugins/pdfmake/build/vfs_fonts.js"></script> -->
	<script src="../../assets_coloradmin/plugins/jszip/dist/jszip.min.js"></script>
	<script src="../../assets_coloradmin/plugins/sweetalert/dist/sweetalert.min.js"></script>
	<!-- <script src="../../assets_coloradmin/plugins/chart.js/dist/chart.min.js"></script> -->
	<!-- <script src="../../assets_coloradmin/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script> -->
	<script src="../../assets_coloradmin/plugins/switchery/dist/switchery.min.js"></script>
	<script src="../../assets_coloradmin/plugins/select2/dist/js/select2.full.min.js"></script>
	<script src="../../assets_coloradmin/js/inputmask.bundle.js"></script>
	<!-- <script src="../../assets_coloradmin/plugins/superbox/jquery.superbox.min.js"></script>
	<script src="../../assets_coloradmin/plugins/@fullcalendar/core/main.global.js"></script>
	<script src="../../assets_coloradmin/plugins/@fullcalendar/daygrid/main.global.js"></script>
	<script src="../../assets_coloradmin/plugins/@fullcalendar/timegrid/main.global.js"></script>
	<script src="../../assets_coloradmin/plugins/@fullcalendar/interaction/main.global.js"></script>s
	<script src="../../assets_coloradmin/plugins/@fullcalendar/list/main.global.js"></script>
	<script src="../../assets_coloradmin/plugins/@fullcalendar/bootstrap/main.global.js"></script> -->
	<!-- <script src="../../assets_coloradmin/plugins/summernote/dist/summernote-lite.js"></script>
	<script src="../../assets_coloradmin/plugins/summernote/dist/lang/summernote-pt-BR.min.js"></script> -->
	<!-- <script src="../../assets_coloradmin/plugins/gritter/js/jquery.gritter.js"></script> -->

	<script src="../../assets_coloradmin/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="../../assets_coloradmin/js/demo/render.highlight.js"></script>

	<!-- ================== END page-js ================== -->
<script>
const MENU_CLASS = "home";
const SUBMENU_CLASS = null;
const DTINI = null;
const DTFIM = null;
const NIVEL = 1;
$(document).ready(function() {
	$(".menu-item").removeClass("active");	
	$(`.menu_${MENU_CLASS}`).addClass("active");
	$(".menu-subitem").removeClass("active");	
	if(SUBMENU_CLASS != '0'){
		// console.log(`.submenu_${MENU_CLASS}_${SUBMENU_CLASS}`);
		$(`.submenu_${MENU_CLASS}_${SUBMENU_CLASS}`).addClass("active");
	}

	let url = window.location.href.toString();
	url = url.split("?");
	if(url[1]){
		url = url[1].split("=")
		if(url[0] == 'dtlPessoa'){
			$("#content").addClass('p-0');
		}else{
			$("#content").removeClass('p-0');
		}
	}else{
		$("#content").removeClass('p-0');
	}

	$(document).on("click", ".confirmImprimir", function() {
		var dados = $(this).val();
		var url = $(this).attr('name');
		swal({
			title: "DESEJA IMPRIMIR O CUPOM?",
			text: "Tem certeza do que está fazendo?",
			icon: 'info',
			buttons: {
			cancel: {
				text: 'Não',
				value: 'cancel',
				visible: true,
				className: 'btn btn-default',
				closeModal: true,
			},
			confirm: {
				text: 'Sim',
				value: 'proceed',
				visible: true,
				className: 'btn btn-primary',
				closeModal: true
			}
			}
		})
		.then(function(result) {
			switch (result) {
			case "cancel":
			swal({
				icon: 'info',
				text: "Cancelado!"
			});
			break;

			case 'proceed':
				$.post("components/venda/action/" + url + ".php", dados,
				function(data) {
					debugger
					if (data!= null && data != false) {
						swal({
							icon: 'success',
							text: "Registro apagado com sucesso."
						});
						location.reload();
					}else{
						swal({
							icon: 'danger',
							text: "Um erro ocorreu, impossível imprimir o cupom."
						});
					}

				}, "html");
				
			break;

			default:
			swal({
				icon: 'info',
				text: "Cancelado!"
			});
			}
		})
		.catch(err => {
			if(err){
				swal({
					icon: 'danger',
					text: "Um erro ocorreu, impossível imprimir o cupom."
				});
			} else {
				swal.stopLoading();
				swal.close();
			}
		});
	});
	$("#advance-daterange span").html(moment(DTINI).format("MMMM D, YYYY") + " - " + moment(DTFIM).format("MMMM D, YYYY"));

	if(NIVEL > 2){
		$("#advance-daterange").daterangepicker({
			format: "MM/DD/YYYY",
			startDate: moment(),
			endDate: moment(),
			minDate: "01/01/2016",
			// maxDate: "12/31/2015",
			dateLimit: { days: 180 },
			showDropdowns: true,
			showWeekNumbers: false,
			timePicker: false,
			timePickerIncrement: 1,
			timePicker12Hour: true,
			ranges: {
				"Hoje": [moment(), moment()],
				"Ontem": [moment().subtract(1, "days"), moment().subtract(1, "days")],
					"Últimos 7 dias": [moment().subtract(6, "days"), moment()],
					"Últimos 30 dias": [moment().subtract(29, "days"), moment()],
					"Este mês": [moment().startOf("month"), moment().endOf("month")],
					"Mês passado": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
				
			},
			opens: "right",
			drops: "down",
			buttonClasses: ["btn", "btn-sm"],
			applyClass: "btn-primary",
			cancelClass: "btn-default",
			separator: " até ",
			todayHighlight: true,
			locale: {
				applyLabel: "Aplicar",
				cancelLabel: "Cancelar",
				fromLabel: "De",
				toLabel: "Até",
				customButton: true,
				customRangeLabel: "Personalizado",
				daysOfWeek: ["Do", "Se", "Te", "Qa", "Qi", "Sx","Sa"],
				monthNames: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
				firstDay: 1
			}
		}, function(start, end, label) {
			$("#advance-daterange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
			$('#dtini').val(start.format('YYYY-MM-DD'));
			$('#dtfim').val(end.format('YYYY-MM-DD'));
		});
	}else{
		$("#advance-daterange").daterangepicker({
			format: "MM/DD/YYYY",
			startDate: moment(),
			endDate: moment(),
			minDate: "01/01/2016",
			// maxDate: "12/31/2015",
			dateLimit: { days: 180 },
			showDropdowns: true,
			showWeekNumbers: false,
			timePicker: false,
			timePickerIncrement: 1,
			timePicker12Hour: true,
			ranges: {
				"Hoje": [moment(), moment()],
				"Ontem": [moment().subtract(1, "days"), moment().subtract(1, "days")]				
			},
			opens: "right",
			drops: "down",
			buttonClasses: ["btn", "btn-sm"],
			applyClass: "btn-primary",
			cancelClass: "btn-default",
			separator: " até ",
			locale: {
				applyLabel: "Aplicar",
				cancelLabel: "Cancelar",
				fromLabel: "De",
				toLabel: "Até",
				customButton: false,
				daysOfWeek: ["Do", "Se", "Te", "Qa", "Qi", "Sx","Sa"],
				monthNames: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
				firstDay: 1
			}
		}, function(start, end, label) {
			$("#advance-daterange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
			$('#dtini').val(start.format('YYYY-MM-DD'));
			$('#dtfim').val(end.format('YYYY-MM-DD'));
		});
	}
	
});
</script>


 </body>

 </html>