<!doctype html>
<html lang="Ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>My Bakery</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1 class="h1 py-3">My Bakery</h1>
      </div>
    </header>
    <!-- グローバルナビ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="#">Home</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">WordPress</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">CSS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">PHP</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <main class="bg-light">
      <div class="container">
        <!-- ピックアップ記事 -->
         <div class="row py-3">
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img8.png" alt="">
               </div>
              <!-- 記事タイトル -->
               <h2 class="h4 px-3 pd-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div>
                </a>
               </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img2.jpg" alt="">
               </div>
              <!-- 記事タイトル -->
               <h2 class="h4 px-3 pd-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div>
                </a>
               </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img3.jpg" alt="">
               </div>
              <!-- 記事タイトル -->
               <h2 class="h4 px-3 pd-3">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div>
                </a>
               </div>
            </div>
          </div>
         </div>
         <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <div class="bg-white py-3 text-center">
              <!-- 日付 -->
              <p>2019/12/14</p>
              <!-- 記事タイトル -->
               <h2 class="px-3 pd-3 font-weight-bolder">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              <!-- カテゴリー -->
              <p><a href="">WordPress</a></p>
               <!-- サムネイル -->
              <div class="pb-3">
                <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img14.png" alt="">
             </div>
             <!-- ディスクリプション -->
              <p class="text-secondary">サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>
              <!-- ボタン -->
                <div class="text-center">
                  <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                  READ MORE
                  </div>
                  </a>
                </div>
            </div>
          </div>
          <!-- サイドバー -->
          <div class="col-md-4 col-12">
            <!-- プロフィール -->
            <div class="container bg-white mb-5 py-5">
              <div class="mx-5">
                <img class="img-fluid rounded-circle" <?php echo get_template_directory_uri(); ?>img6.png" alt="">
              </div>
              <div class="text-center">
                <h4 class="d-inline-block py-3 border-bottom border-info">よしや　まき</h4>
              </div>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            
            <!-- 検索窓 -->
            <div class="container bg-white mb-5 py-5">
              <form>
                  <input type="text" class="form-control"  placeholder="Serch for">
              </form>
            </div>
            <!-- 読んで欲しい記事 -->
            <div class="container bg-white mb-5 py-5">
              <div class="text-center pb-5">
                <h4 class="d-inline-block py-3 border-bottom border-info">読んで欲しい記事</h4>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                 <div class="pb-3">
                  <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img12.jpg" alt="">
                 </div>
                <!-- 記事タイトル -->
                 <h5 class="h5">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                 <div class="pb-3">
                  <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img13.png" alt="">
                 </div>
                <!-- 記事タイトル -->
                 <h5 class="h5">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              </div>
              <div class="pb-5">
                <!-- サムネイル -->
                 <div class="pb-3">
                  <img class="img-fluid" <?php echo get_template_directory_uri(); ?>img9.png" alt="">
                 </div>
                <!-- 記事タイトル -->
                 <h5 class="h5">ピックアップコンテンツ1ピックアップコンテンツ1ピックアップコンテンツ1</h2>
              </div>
            </div>
          </div>
       </div>
    </div>
    
    <footer class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class=" pb-5">
              <h4 class="d-inline-block py-3 border-bottom border-info">About</h4>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class=" pb-5">
              <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
            </div>
            <div class="p-3 border-top border-bottom border-secondary">
              <a class="text-secondary" href="">
                ポートフォリオサイト
              </a>
            </div>
            <div class="p-3 border-top border-bottom border-secondary">
              <a class="text-secondary" href="">
                ポートフォリオサイト
              </a>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class=" pb-5">
              <h4 class="d-inline-block py-3 border-bottom border-info">X</h4>
            </div>
            <a href="https://twitter.com/intent/tweet?screen_name=x&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-size="large" data-text="こんにちは" data-related="1973_maki" data-lang="ja" data-show-count="false">Tweet to @x</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
      <div class="bg-dark text-white text-center p-3">
        &copy;maki yoshiya, 2024 All Rights Reserved.
      </div>
    </footer>
  </main>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>