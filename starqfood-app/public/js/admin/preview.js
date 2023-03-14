document.getElementById('image').onchange=function(e){
    let reader =new FileReader();
    document.getElementById("image0").remove();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload=function(){
        let preview = document.getElementById('preview');
            image=document.createElement('img');
            image.src=reader.result;
            image.style.width="15vw";
            image.style.height="15vw";
            image.id='image0';
            image.className="figure-img img-fluid rounded-circle" ;
            preview.append(image);
            

    }
}