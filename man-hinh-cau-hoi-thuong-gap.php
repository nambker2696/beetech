<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng nhập</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/man-hinh-cau-hoi-thuong-gap.css"></li>
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/mobile/style.css">
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/jquery-ui.min.js"></script>
</head>
<body>
  <?php $page = 'faq'; include('header.php') ?>
  <!-- end form -->
  <div class="content">
    <div class="container">
      <div class="faq-header">
        <h1 style="text-align: center;font-size: 40px;">
          <span>Question? Look here.</span>
        </h1>
      </div>
      <div class="row">
        <div class="col-md-3" style="margin-top: 50px">
          <h3 class="question-contents-header">Contents</h3>
          <ul class="question-contents">
            <li class="active">
              <span>Billing</span>
            </li>
            <li>
              <span>Cruise</span>
            </li>
            <li>
              <span>Member</span>
            </li>
            <li>
              <span>Agency</span>
            </li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="question-item">
            <div class="expand-question">
              <i class="fa fa-plus expan-question-fa" ></i>
            </div>
            <div class="question-content">
              <div class="question"><span class="span-question">Làm thế nào để tôi có thể trích xuất hóa đơn của khách hàng?</span></div>
              <div class="anwser"><span class="span-anwser">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div>
            </div>
          </div>
          <div class="question-item">
            <div class="expand-question">
              <i class="fa fa-plus expan-question-fa" ></i>
            </div>
            <div class="question-content">
              <div class="question"><span class="span-question" style="">Are you gay?</span></div>
              <div class="anwser"><span class="span-anwser">Yes</span></div>
            </div>
          </div>
          <div class="question-item">
            <div class="expand-question">
              <i class="fa fa-plus expan-question-fa" ></i>
            </div>
            <div class="question-content">
              <div class="question"><span class="span-question" style="">Làm thế nào để tôi sử dụng chức năng thanh toán?</span></div>
              <div class="anwser"><span class="span-anwser">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div>
            </div>
          </div>
          <div class="question-item">
            <div class="expand-question">
              <i class="fa fa-plus expan-question-fa" ></i>
            </div>
            <div class="question-content">
              <div class="question"><span class="span-question" style="">Làm thế nào để tôi có thể liên lạc với người quản lý?</span></div>
              <div class="anwser"><span class="span-anwser">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div>
            </div>
          </div>
          <div class="question-item">
            <div class="expand-question">
              <i class="fa fa-plus expan-question-fa" ></i>
            </div>
            <div class="question-content">
              <div class="question"><span class="span-question" style="">Tôi cần đăng ký những gì với nhà chức trách?</span></div>
              <div class="anwser"><span class="span-anwser">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $('.expan-question-fa').click(function(){
            if ($(this).hasClass('fa-plus')) {
              $(this).removeClass('fa-plus');
              $(this).addClass('fa-minus');
            }
            else {
              $(this).addClass('fa-plus');
              $(this).removeClass('fa-minus'); 
            }
            $(this).parents('.question-item').find('.anwser').toggle();
          });
        </script>
      </div>
    </div>    
  </div>
  <!-- end content -->
  <?php include('footer.php'); ?>

</body>
</html>