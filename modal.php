<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    <link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <style media="screen">
      body{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        line-height: 1.6;
      }
      .button{
        background: coral;
        padding: 1em 2em;
        color: #fff;
        border: 0;
      }
      .button:hover{
        background: #333;
      }
      .modal{
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }
      .modal-content{
        background-color: #f4f4f4;
        margin: 20% auto;
        width: 70%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2),0 7px 20px 0 rgba(0, 0, 0, 0.17);
        animation-name: modalopen;
        animation-duration: 3s;
      }
      .modal-header h3, .modal-footer h4{
        margin: 0;
      }
      .modal-header{
        background: coral;
        padding: 15px;
        color: #fff;
      }
      .modal-body{
        padding: 10px 20px;
      }
      .modal-footer{
        background: coral;
        padding: 10px;
        color: #fff;
        text-align: center;
      }
      .closeBtn{
        color: #ccc;
        float: right;
        font-size: 30px;
        color: #fff;
      }
      .closeBtn:hover,.closeBtn:focus{
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }
      @keyframes modalopen {
        from{opacity: 0}
        to{opacity: 1}

      }
    </style>
  </head>
  <body>
    <button id="modalBtn" class="button">Click here</button>


  <div id="simpleModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="closeBtn" id="closeBtn">&times;</span>
        <h3>Modal Header</h3>
      </div>
      <div class="modal-body">
        <p>Hello.. iam a modal</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
         <h4>modal-footer</h4>
      </div>
    </div>
  </div>
<script type="text/javascript">
//get modal element

/*$(document).ready(function(){
$('#modalBtn').click(function(){
  $('.modal').css("display", "block");
});
$('.closeBtn').click(function(){
  $('.modal').css("display", "none");
});


});*/

var modal = document.getElementById('simpleModal');

//get open modal button
var modalBtn = document.getElementById('modalBtn');

var closeBtn = document.getElementsByClassName('closeBtn')[0];

//listen to open click
modalBtn.addEventListener('click', openModal);

//listen to close click
closeBtn.addEventListener('click', closeModal);

//listen to outside click
window.addEventListener('click', closeOutside);

function openModal(){
  modal.style.display = 'block';
}
//fucntion to open modal
function closeModal(){
  modal.style.display = 'none';
}
//fucntion to close outside
function closeOutside(e){
  if (e.target == modal) {
   modal.style.display = 'none';
  }
}

</script>
  </body>
</html>
