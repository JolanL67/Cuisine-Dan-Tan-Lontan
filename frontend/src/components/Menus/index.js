import React, { useEffect } from 'react';
import AddShoppingCartIcon from '@material-ui/icons/AddShoppingCart';
import { Menu } from 'semantic-ui-react';

import './menu.scss';

const Menus = ({
  meals,
  addToCart,
  cart,
  getType,
  typeSelected,
  getAllMeal,
  allMealByType,
  mealTypeList,
}) => {
  useEffect(() => {
    if (typeSelected !== '') {
      const typeFilterMeal = meals.filter(
        (meal) => meal.type === typeSelected,
      );
      allMealByType(typeFilterMeal);
    }
  }, []);

  const handleClickAdd = (e, data) => {
    let addedItem = meals.find((item) => item.name === e.currentTarget.id);
    let itemPrice = meals.find((item) => item.price === e.currentTarget.price);
    console.log(addedItem.price);
    console.log(addedItem);
    addToCart(addedItem);
  };

  const handleClickType = (e) => {
    getType(e.currentTarget.id);
    console.log(e.currentTarget.id);
    const typeFilterMeal = meals.filter(
      (meal) => meal.type === e.currentTarget.id,
    );
    allMealByType(typeFilterMeal);
  };

  return (
    <div className="cdtl_menu">
      <h1 id="Notre_Carte" className="cdtl_menu_title">La Carte</h1>
      <Menu tabular>
          <Menu.Item id="Plats chaud" active={typeSelected === 'Plats chaud'} onClick={handleClickType} value="Plats chaud">Nos plats Chaud / </Menu.Item>
          <Menu.Item id="Apéritif Créole" active={typeSelected === 'Apéritif Créole'} className="big-button" onClick={handleClickType} value="Apéritif Créole">Appéritif Créole / </Menu.Item>
          <Menu.Item id="Nos sandwichs réunionnais" active={typeSelected === 'Nos sandwichs réunionnais'} className="big-button" onClick={handleClickType} value="Nos sandwichs réunionnais">Nos Sandwichs Réunionnais / </Menu.Item>
          <Menu.Item id="Gâteaux fait Maison" active={typeSelected === 'Gâteaux fait Maison'} className="big-button" onClick={handleClickType} value="Gâteaux fait Maison">Nos Désserts / </Menu.Item>
          <Menu.Item id="Boucherie" active={typeSelected === 'Boucherie'} className="big-button" onClick={handleClickType} value="Boucherie">Traiteur "boucherie"</Menu.Item>
        </Menu>
      <div className="cdtl_menu_type_container">
        {mealTypeList.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€ <button onClick={handleClickAdd} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default Menus;
