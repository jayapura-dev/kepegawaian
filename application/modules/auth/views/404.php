<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
  body {
    background: #dedede;
  }
  .page-wrap {
    min-height: 100vh;
  }
</style>

<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">403 Forbidden</span>
                <div class="mb-4 lead">Halaman Yang Anda Cari Tidak Ditemukan !!!</div>
                <div class="mb-4 lead">Akses Dibatasi !!!</div>
                <a onclick="goBack()" href="#" type="button" class="btn btn-link">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function goBack(){
    window.history.back();
  }
</script>
