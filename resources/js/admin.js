window.axios = require('axios');
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
}

import './admin/adminlte.js'
import './confirm.js';

$(document).ready(function(){
	// Xem trước hình ảnh khi upload
	$(".upload-file").change(function() {
  		readURL(this);
	});

  // Xóa dữ liệu
  // Xóa tài nguyên DELETE method
  $(".destroy-item-resource").click(function(event) {
      destroyItem(event, event.target);
  });

  $(".formAjax").on('submit', function(event) {
      event.preventDefault();
      var action = $(this).attr('action');
      var formData = new FormData(event.target);
      axios.post(action,
      formData
    )
    .then((response)=>{
        if(response.data.redirect){
            window.location.href = response.data.redirect;
        }
        else if(response.data.reload){
          window.location.reload();
        }
        else{
            remove_errors();
            if (response.data.message){
              showSuccessMessage(response.data.message);          
            }
            else{
              showSuccessMessage("Thành công!");            
            }
        }
    })
    .catch((error) => {     
      showErrorMessage(error.response.data.errors)
      parse_errors(error.response.data, event.target);             
    }); 
      
  });
})

function parse_errors(errorText, form){
  let error = errorText;
  var fields = $(form).find('[required]');
  remove_errors();
  $(fields).each(function(index, el) {
    let atribute = $(el).attr('id');
    if( atribute in error.errors){
      var er = error.errors[atribute].join();
      if (atribute == 'captcha'){
        $("#" + atribute).find('input[type=text]').addClass('input-with-errors');
        $("#" + atribute).after(`<label class='label-error text-danger mt-1'>${er}</label>`);
      }
      else{       
        $(el).addClass('input-with-errors').after(`<label class='label-error text-danger mt-1'>${er}</label>`);     
      }
    }
  });
}

function remove_errors(){
  $(".label-error").remove();
  $('.input-with-errors').removeClass('input-with-errors');
}

/***
* Hiển thị thông báo không thành công 
*/
window.showErrorMessage = function(message){
  message = message && typeof(message) == "string" ? message : "Đã xảy ra lỗi";
  $(".notification").show().removeClass("bg-success").addClass("bg-danger").html(message).delay(3000).fadeOut();
}

/***
* Hiển thị thông báo thành công
*/
window.showSuccessMessage = function(message){
  message = message && typeof(message) == "string" ? message : "Thành công";
    $(".notification").show().removeClass("bg-danger").addClass("bg-success").html(message).delay(3000).fadeOut();
}

/***
 * Xem trước hình ảnh khi upload
 *
 */
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('.preview').attr('src', e.target.result);
    }

    // convert to base64 string
    reader.readAsDataURL(input.files[0]); 
  }
}

window.destroyItem = function(event, ctr){
  event.preventDefault();   
  let conf = {
      title: "Thông báo",
      body: "Xóa mục này?",
  };

  CustomConfirm(conf, (confirmed, element) => {          
    if (confirmed) {
      var href = $(ctr).attr('href');
      axios.delete(href)
      .then(response => {
      $("#item-"+ response.data.id).slideUp(600);
  })
  .catch(function (error) {
        showErrorMessage("Không thể xóa được");
    });    
      } else {
          console.log("No action");
      }
  });
}