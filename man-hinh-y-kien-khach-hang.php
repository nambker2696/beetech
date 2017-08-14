<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng nhập</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/man-hinh-y-kien-khach-hang.css"></li>
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/mobile/style.css">
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/jquery-ui.min.js"></script>
</head>
<body>
  <?php $page = 'feedback'; include('header-logged.php') ?>
  <!-- end form -->
  <div class="content">
    <div class="container">
      <div class="feedback-header">
        <h1 style="text-align: center;font-size: 40px;">
          <span>Customer feedbacks.</span>
        </h1>
      </div>
      <div class="row">
        <div class="col-md-3" style="margin-top: 50px">
          <div class="feed-back-form">
            <h3><span>Your feedback</span></h3>
            <form class="form-horizontal" role="form">
              <div class="form-beet">
                <input placeholder="Tên của bạn" class="beet-form-input " name="" value="" type="text">
              </div>
              <div>
                <textarea placeholder="Nội dung phản hồi" class="beet-form-input " name="" value="" type="text" rows="6"></textarea>
              </div>
              <button class="btn-submit-feedback "><span>Gửi</span></button>
            </form>
          </div>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <div class="feedback-list">
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feedback-list">
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
                  </div>
                </div>
                <div class="feedback-item">
                  <div class="feedbacker-name">
                    <h3>
                      <span>Mr Orio - Aplr 20</span>
                    </h3>
                  </div>
                  <div class="feedback-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>    
  </div>
  <!-- end content -->
  <?php include('footer.php'); ?>

</body>
</html>