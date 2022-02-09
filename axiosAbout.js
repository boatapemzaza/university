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
//CONTACT
const getContact = document.getElementById('CONTACT');

const getdata = () => { axios.get('http://localhost/home/update.json').then(response => {
   getContentFirst.innerHTML = response.data.CONTENT[0];
   getContentSecond.innerHTML = response.data.CONTENT[1];

   getTitleBoxFirst.innerHTML = response.data.DATA_BOX_FIRST[0];
   getDataBoxFirst.innerHTML = response.data.DATA_BOX_FIRST[1];
   getTitleBoxSecond.innerHTML = response.data.DATA_BOX_SECOND[0];
   getDataBoxSecond.innerHTML = response.data.DATA_BOX_SECOND[1];
   getTitleBoxThird.innerHTML = response.data.DATA_BOX_THIRD[0];
   getDataBoxThird.innerHTML = response.data.DATA_BOX_THIRD[1];

   getContact.innerHTML = response.data.CONTACT;
});
};

window.addEventListener('load', (event) => {
   getdata();
});