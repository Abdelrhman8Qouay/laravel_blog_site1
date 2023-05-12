

// Home Blog Page ---------------------------------------------------------

// Create Post Page -------------------------------------------------------

const imgInputCreate = document.getElementById("imageInput");
const imgCreateBlog = document.querySelector(".imgLabel img");

imgInputCreate.addEventListener('change', readURL, true);
function readURL(){
    const file = imgInputCreate.files[0];
    const reader = new FileReader();
    reader.onloadend = function(e){
        // const imgElement = document.createElement("img");
        // imgElement.src = e.target.result;
        imgCreateBlog.src = e.target.result;

        // imgElement.onload = (e) => {
        //     const canvas  = document.getElementById("imgCanva");
        //     const MAX_WIDTH = 980;

        //     const scaleSize = MAX_WIDTH / e.target.width;
        //     canvas.width = MAX_WIDTH;
        //     canvas.height = e.target.height * scaleSize;

        //     const ctx = canvas.getContext("2d");
        //     ctx.drawImage(e.target, 0, 0, canvas.width, canvas.height);
        //     const srcEncoded = ctx.canvas.toDataURL(e.target, "image/jpeg");
        //     imgCreateBlog.src = srcEncoded;
        //     console.log(srcEncoded);
        // }
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}
