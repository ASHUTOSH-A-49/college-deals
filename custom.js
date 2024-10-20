
//for preview the post image
var input= document.querySelector('#select_post_img');

input.addEventListener('change',preview);
function preview(){
    var fileobject= this.files[0];
    var filereader = new FileReader();

    filereader.readAsDataURL(fileobject);

    filereader.onload = function(){
        var image_src = filereader.result;
        var image = document.querySelector('#post_img');
        image.setAttribute('src', image_src);
        image.setAttribute('style','display:');
    }


}

// var input2= document.querySelector('#select_post_img2');

// input2.addEventListener('change',preview2);
// function preview2(){
//     var fileobject2= this.files[0];
//     var filereader2 = new FileReader();

//     filereader2.readAsDataURL(fileobject2);

//     filereader2.onload = function(){
//         var image_src2 = filereader2.result;
//         var image2 = document.querySelector('#post_img2');
//         image2.setAttribute('src', image_src2);
//         image2.setAttribute('style','display:');
//     }


// }

// var input3= document.querySelector('#select_post_img3');

// input3.addEventListener('change',preview3);
// function preview3(){
//     var fileobject3= this.files[0];
//     var filereader3 = new FileReader();

//     filereader3.readAsDataURL(fileobject3);

//     filereader3.onload = function(){
//         var image_src3 = filereader3.result;
//         var image3 = document.querySelector('#post_img3');
//         image3.setAttribute('src', image_src3);
//         image3.setAttribute('style','display:');
//     }


// }


