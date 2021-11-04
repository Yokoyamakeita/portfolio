
const img = document.getElementById("imagechange")
let orgWidth  = img.width;  // 元の横幅を保存
let orgHeight = img.height; // 元の高さを保存

const button = document.getElementById("button")

// 画像を変更する書き方
// document.getElementById('imgタグのid属性').src='画像のパス';
button.onclick = function(){
    const inp_val = document.getElementById("inp_val").value
    console.log(inp_val);

    switch(inp_val){
        case "1": img.src='img/tai.jpg'; img.style.width = "650px";img.style.height = "700px" ;break;
        case "2": img.src='img/america.png'; img.style.width = "650px";img.style.height = "450px" ; break;
        default:  img.src='img/world_all.jpg';img.style.width = "650px";img.style.height = "450px" ; break;

    }
}