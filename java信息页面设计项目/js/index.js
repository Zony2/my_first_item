

/*导航层*/
var oNav=document.getElementsByClassName("nav")[0];
var oNavList=oNav.getElementsByClassName("nav_list")[0];
var oNavLi=oNavList.children;
var oMenu=oNavList.getElementsByClassName("menu");
for (var i = 0; i <oNavLi.length ; i++) {
    oNavLi[i].onmouseover=function () {
        for (var j = 0; j <oNavLi.length ; j++){
            oNavLi[j].className="";
        }
        for (var j = 0; j <oMenu.length ; j++) {
              oMenu[j].style.display="none";
        }
        this.className="active";
        this.lastElementChild.style.display="block";
    };
    oNavLi[i].onmouseout=function () {
       this.className="";
        for (var j = 0; j <oMenu.length ; j++) {
            oMenu[j].style.display="none";
        }
    }
}
/*banner层*/
  //薪不跳动
var xinbu=document.getElementById("xingbu");
setTimeout(function () {
    bufferMove(xinbu,{"top":30,},5,function () {
        bufferMove(xinbu,{"top":77},5)
    });
},1000);
setTimeout(function () {
    bufferMove(xinbu,{"top":30,},5,function () {
        bufferMove(xinbu,{"top":77},5)
    });
},1800);
var mySwiper = new Swiper('.banner',{
    pagination: '.pagination',
    paginationClickable: true
});
/*开课层掀日历效果*/
var monthList = document.getElementsByClassName("month-list")[0];
var dateList =  document.getElementsByClassName("date-list")[0];
var content01 =  document.getElementsByClassName("kaike")[0];

window.onscroll = function(){
    var st = document.body.scrollTop || document.documentElement.scrollTop;
    if(st >= content01.offsetHeight+content01.offsetTop - document.documentElement.clientHeight){
        bufferMove(monthList,{'top':-698},10,function () {
            bufferMove(dateList,{'top':-254},10,function () {
                window.onscroll = null;
            });
        });
    }
};

/*免费试听层滑过效果*/
var shitinList=document.getElementsByClassName("shitin_list")[0];
var shitinP=shitinList.getElementsByTagName("p");
var shitindiv=shitinList.getElementsByTagName("div");
for (var i = 0; i <shitindiv.length ; i++) {
    shitindiv[i].index=i;
    shitindiv[i].onmouseover=function () {
        move(shitinP[this.index],"bottom",15,0);
    };
    shitindiv[i].onmouseout=function(){
        move(shitinP[this.index],"bottom",15,-150);
    }
}

/*form1表单模拟层*/
var form1=document.getElementById("form1");
var f1span=form1.getElementsByTagName("span");
var f1input=form1.getElementsByTagName("input");
for (var i = 0; i <f1span.length ; i++) {
    f1span[i].index=i;
    f1span[i].onclick=function () {
        f1input[this.index].focus();
    };
    f1input[i].index=i;
    f1input[i].onkeydown = function () {
        f1span[this.index].style.display = "none";
    };
    f1input[i].index = i;
    f1input[i].onkeyup = function () {
        if (this.value){
            f1span[this.index].style.display = "none";
        } else {
            f1span[this.index].style.display = "block";
        }
    }
}

/*form2层模拟plicehouder*/
var box2form=document.getElementsByClassName("form2")[0];
var form2=box2form.getElementsByTagName("form")[0];
var f2span=form2.getElementsByTagName("span");
var f2ul=form2.getElementsByTagName("ul")[0];
var f2input=f2ul.getElementsByTagName("input");
var name=document.getElementById("name");
for (var i = 0; i <f2span.length ; i++) {
     f2span[i].index=i;
    f2span[i].onclick=function () {
         f2input[this.index].focus();
    };
     f2input[i].index=i;
    f2input[i].onkeydown = function () {
        f2span[this.index].style.display = "none";
    };
    f2input[i].index = i;
    f2input[i].onkeyup = function () {
        if (this.value){
            f2span[this.index].style.display = "none";
        } else {
            f2span[this.index].style.display = "block";
        }
    }
}
/*困扰层*/
var wentibox1=document.getElementsByClassName("wentibox1")[0];
var wentibox2=document.getElementsByClassName("wentibox2")[0];
var wentibox3=document.getElementsByClassName("wentibox3")[0];
var wen=wentibox2.getElementsByTagName("li");
wentibox1.onmouseover=function () {
    mren();
};
wentibox1.onmouseout=function () {
    mrenxs();
};
wentibox3.onmouseover=function () {
    mren();
};
wentibox3.onmouseout=function () {
    mrenxs( );
};
function  mren() {
    wentibox2.style.cssText="position:;\n" +
        "top: 0px;padding: 42px 0 42px 48px;background-color:#ffffff;";
    for (var i = 0; i <wen.length ; i++) {
        wen[i].style.color="#666666";
    }
}
function  mrenxs() {
    wentibox2.style.cssText="position:relative;\n" +
        "    top: -10px;padding: 52px 0 52px 48px;background-color:#7b24ea";
    for (var i = 0; i <wen.length ; i++) {
        wen[i].style.color="#ffffff";
    }
}

/*学前迷茫层*/
var mili1=document.getElementsByClassName("mili1")[0];

var mili2=document.getElementsByClassName("mili2")[0];
var mili2ul=mili2.getElementsByTagName("ul")[0];
var mili2a=mili2ul.getElementsByTagName("a");

var mili3=document.getElementsByClassName("mili3")[0];
mili1.onmouseover=function () {
    milimr()
};
mili1.onmouseout=function () {
    milimr2()
};
mili3.onmouseover=function () {
    milimr()
};
mili3.onmouseout=function () {
    milimr2()
};
function milimr() {
    mili2ul.style.cssText="background-color:#ffffff;\n" +
        "    position:;z-index: -1;padding:50px 0 50px 0 ;top:0px;";
    for (var i = 0; i <mili2a.length ; i++) {
        mili2a[i].style.color="#989898"
    }
}
function milimr2() {
    mili2ul.style.cssText="background-color:#1c025f;\n" +
        "    position:relative;z-index: +1;padding:62px 0 62px 0 ;top:-12px;";
    for (var i = 0; i <mili2a.length ; i++) {
        mili2a[i].style.color="#ffffff"
    }
}


/*二次就业管推荐吗*/
var textList=document.getElementsByClassName("text_list")[0];
var arrimg=["img/jy1.jpg","img/jy2.jpg","img/jy3.jpg",
    "img/jy4.jpg","img/jy5.jpg","img/jy6.jpg"  ];
var arrimg2=["img/jy11.jpg","img/jy22.jpg","img/jy33.jpg",
    "img/jy44.jpg","img/jy55.jpg","img/jy66.jpg"  ];
var texLi=textList.getElementsByTagName("li");
var teximg=textList.getElementsByTagName("img");
for (var i = 0; i <texLi.length ; i++) {
    texLi[i].index=i;
    texLi[i].onmouseover=function () {
        teximg[this.index].src=arrimg[this.index];
    };
    texLi[i].onmouseout=function () {
        teximg[this.index].src=arrimg2[this.index];
    }
}

























