const categories = {
  comics : ['marvel'],
  games : [],
  movies : [],
  series : []
};

const el_category = document.getElementById('category')
const el_selects = document.querySelectorAll('input[type="checkbox"]');

function changeCategories(el)
{
  if(el.checked)
  {
    var options = '';

    categories[el.id].forEach((categorie)=>
    {
      options += `<option id="opt-${categorie}" value="${categorie}">${categorie}</option>`;
    });

    el_category.innerHTML += options;
  }
  else
  {
    categories[el.id].forEach((categorie)=>
    {
      let option = document.getElementById('opt-'+categorie);
      el_category.removeChild(option);
    });
  }
}

function addOptions()
{
  el_selects.forEach((select)=>
  {
    if(select.hasAttribute('checked'))
    {
      changeCategories(select);
    }
  });
}
addOptions();

function addCategory()
{
  let value = el_category.getAttribute('value')

  el_category.childNodes.forEach((child)=>
  {
    if(child.value === value)
    {
      child.setAttribute('selected', 'selected');
    }
  });
}
addCategory();
