
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
        case "1": img.src='img/tokyo.gif'; img.style.width = "650px";img.style.height = "450px" ;break;
        case "2": img.src='img/chiba.gif'; img.style.width = "650px";img.style.height = "750px" ; break;
        case "3": img.src='img/kanagawa.gif';img.style.width = "650px";img.style.height = "500px" ; break;
        case "4": img.src='img/tochigi.gif' ;img.style.width = "650px";img.style.height = "650px" ; break;
        case "5": img.src='img/gunma.gif' ;img.style.width = "650px";img.style.height = "600px" ; break;
        case "6": img.src='img/sizuoka.gif' ;img.style.width = "650px";img.style.height = "450px" ; break;
        case "7": img.src='img/mie.gif' ;img.style.width = "650px";img.style.height = "1000px" ; break;
        case "8": img.src='img/osaka.gif' ;img.style.width = "650px";img.style.height = "750px" ; break;
        case "9": img.src='img/nagasaki.gif' ;img.style.width = "650px";img.style.height = "450px" ; break;
        default:  img.src='img/japan.gif';img.style.width = "650px";img.style.height = "450px" ; break;

    }
}