//HEADER
const getHeaderFirst = document.getElementById('HEADER_FIRST');
const getHeaderSecond = document.getElementById('HEADER_SECOND');
//CONTENT
const getContentFirst = document.getElementById('CONTENT_FIRST');
const getContentSecond = document.getElementById('CONTENT_SECOND');
//DATA BOX
const getTitleBoxFirst = document.getElementById('TITLE_BOX_FIRST');
const getDataBoxFirst = document.getElementById('DATA_BOX_FIRST');
//DATA BOX
const getTitleBoxSecond = document.getElementById('TITLE_BOX_SECOND');
const getDataBoxSecond = document.getElementById('DATA_BOX_SECOND');
//DATA BOX
const getTitleBoxThird = document.getElementById('TITLE_BOX_THIRD');
const getDataBoxThird = document.getElementById('DATA_BOX_THIRD');
//PIC LOCATION
const getPicLoFirst = document.getElementById('PIC_LOCATION_FRIST');
const getPicLoSecond = document.getElementById('PIC_LOCATION_SECOND');
//IMAGE FIRST
const getPicImageFirst = document.getElementById('PIC_IMAGE_FIRST');
const getPicTitleFirst = document.getElementById('PIC_TITLE_FIRST');
//IMAGE SECOND
const getPicImageSecond = document.getElementById('PIC_IMAGE_SECOND');
const getPicTitleSecond = document.getElementById('PIC_TITLE_SECOND');
//IMAGE THIRD
const getPicImageThird = document.getElementById('PIC_IMAGE_THIRD');
const getPicTitleThird = document.getElementById('PIC_TITLE_THIRD');
//DATA PROJECT
const getDataTitle = document.getElementById('DATA_TITLE');
const getDataComent = document.getElementById('DATA_COMMENT');
//IMAGE PRO FIRST
const getProImageFirst = document.getElementById('PRO_IMAGE_FIRST');
const getProTitleFirst = document.getElementById('PRO_TITLE_FIRST');
const getProCommentFirst = document.getElementById('PRO_COMMENT_FIRST');
//IMAGE PRO SECOND
const getProImageSecond = document.getElementById('PRO_IMAGE_SECOND');
const getProTitleSecond = document.getElementById('PRO_TITLE_SECOND');
const getProCommentSecond = document.getElementById('PRO_COMMENT_SECOND');
//IMAGE PRO THIRD
const getProImageThird = document.getElementById('PRO_IMAGE_THIRD');
const getProTitleThird = document.getElementById('PRO_TITLE_THIRD');
const getProCommentThird = document.getElementById('PRO_COMMENT_THIRD');
//COMMENT
const getComTitle = document.getElementById('COM_TITLE');
const getComComment = document.getElementById('COM_COMMENT');
//COMMENT FIRST
const getComImageFirst = document.getElementById('COM_IMAGE_FIRST');
const getComCommentFirst = document.getElementById('COM_COMMENT_FIRST');
const getComNameFirst = document.getElementById('COM_NAME_FIRST');
const getComSymbolFirst = document.getElementById('COM_SYMBOL_FIRST');
//COMMENT SECOND
const getComImageSecond = document.getElementById('COM_IMAGE_SECOND');
const getComCommentSecond = document.getElementById('COM_COMMENT_SECOND');
const getComNameSecond = document.getElementById('COM_NAME_SECOND');
const getComSymbolSecond = document.getElementById('COM_SYMBOL_SECOND');
//CONTACT
const getContact = document.getElementById('CONTACT');


const getdata = () => { axios.get('http://localhost/home/update.json').then(response => {
   getHeaderFirst.innerHTML = response.data.HEADER[0];
   getHeaderSecond.innerHTML = response.data.HEADER[1];
   getContentFirst.innerHTML = response.data.CONTENT[0];
   getContentSecond.innerHTML = response.data.CONTENT[1];

   getTitleBoxFirst.innerHTML = response.data.DATA_BOX_FIRST[0];
   getDataBoxFirst.innerHTML = response.data.DATA_BOX_FIRST[1];
   getTitleBoxSecond.innerHTML = response.data.DATA_BOX_SECOND[0];
   getDataBoxSecond.innerHTML = response.data.DATA_BOX_SECOND[1];
   getTitleBoxThird.innerHTML = response.data.DATA_BOX_THIRD[0];
   getDataBoxThird.innerHTML = response.data.DATA_BOX_THIRD[1];
   
   getPicLoFirst.innerHTML = response.data.PICTURE_LOCATION[0];
   getPicLoSecond.innerHTML = response.data.PICTURE_LOCATION[1];

   getPicImageFirst.src = response.data.IMAGE_FIRST[0];
   getPicTitleFirst.innerHTML = response.data.IMAGE_FIRST[1];
   getPicImageSecond.src = response.data.IMAGE_SECOND[0];
   getPicTitleSecond.innerHTML = response.data.IMAGE_SECOND[1];
   getPicImageThird.src = response.data.IMAGE_THIRD[0];
   getPicTitleThird.innerHTML = response.data.IMAGE_THIRD[1];

   getDataTitle.innerHTML = response.data.DATA_PROJECT[0];
   getDataComent.innerHTML = response.data.DATA_PROJECT[1];
   getProImageFirst.src = response.data.IMAGE_PROJECT_FIRST[0];
   getProTitleFirst.innerHTML = response.data.IMAGE_PROJECT_FIRST[1];
   getProCommentFirst.innerHTML = response.data.IMAGE_PROJECT_FIRST[2];
   getProImageSecond.src = response.data.IMAGE_PROJECT_SECOND[0];
   getProTitleSecond.innerHTML = response.data.IMAGE_PROJECT_SECOND[1];
   getProCommentSecond.innerHTML = response.data.IMAGE_PROJECT_SECOND[2];
   getProImageThird.src = response.data.IMAGE_PROJECT_THIRD[0];
   getProTitleThird.innerHTML = response.data.IMAGE_PROJECT_THIRD[1];
   getProCommentThird.innerHTML = response.data.IMAGE_PROJECT_THIRD[2];
   getComTitle.innerHTML = response.data.COMMENT[0];
   getComComment.innerHTML = response.data.COMMENT[1];
   getComImageFirst.innerHTML = response.data.COMMENT_FIRST[0];


   getComImageFirst.src = response.data.COMMENT_FIRST[0];
   getComCommentFirst.innerHTML = response.data.COMMENT_FIRST[1];
   getComNameFirst.innerHTML = response.data.COMMENT_FIRST[2];
   for(i=0;i<+response.data.COMMENT_FIRST[3];i++){
      let sym = document.createElement("i")
      sym.className = "fas fa-star";
      getComSymbolFirst.appendChild(sym);
   }


   getComImageSecond.src = response.data.COMMENT_SECOND[0];
   getComCommentSecond.innerHTML = response.data.COMMENT_SECOND[1];
   getComNameSecond.innerHTML = response.data.COMMENT_SECOND[2];
   for(i=0;i<response.data.COMMENT_SECOND[3];i++){
      let sym = document.createElement("i")
      sym.className = "fas fa-star";
      getComSymbolSecond.appendChild(sym);
   }

   getContact.innerHTML = response.data.CONTACT;
});
};

window.addEventListener('load', (event) => {
   getdata();
});