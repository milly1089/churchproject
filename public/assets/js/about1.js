const readmore1 = document.querySelector('.read-more1');
const readmore2 = document.querySelector('.read-more2');
const readmore3= document.querySelector('.read-more3');
const readmore4= document.querySelector('.read-more4');
const fundamentals=document.querySelector('.allfundamentals');
const ourmission=document.querySelector('.mission');
const ourvision=document.querySelector('.vision');
const ouridentity=document.queryselector('.identity');

const feature=document.queryselector('.features');

const heritage=document.querySelector('.heritage');


heritage.addEventListener('click', () => {

	feature.classList.remove('hide');
})

readmore2.addEventListener('click', () => {
	ourmission.classList.remove('hide');
	ourvision.classList.add('hide');
	ouridentity.classList.add('hide');
	fundamentals.classList.add('hide');
})

readmore3.addEventListener('click', () => {
	ourmission.classList.add('hide');
	ourvision.classList.remove('hide');
	ouridentity.classList.add('hide');
	fundamentals.classList.add('hide');
})

readmore4.addEventListener('click', () => {
	ourmission.classList.add('hide');
	ourvision.classList.add('hide');
	ouridentity.classList.remove('hide');
	fundamentals.classList.add('hide');
})


$(document).ready(function () {
    $('#announcements_table').DataTable();
});