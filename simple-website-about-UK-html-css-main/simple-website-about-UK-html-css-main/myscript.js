const changeColorBtn = document.getElementById('change-color-btn');
const body = document.body;

changeColorBtn.addEventListener('click', () => {
  const randomColor = Math.floor(Math.random()*16777215).toString(16);
  body.style.backgroundColor = '#' + randomColor;
});