import React, { useEffect } from 'react';
import AddShoppingCartIcon from '@material-ui/icons/AddShoppingCart';
import ExpandLessIcon from '@material-ui/icons/ExpandLess';
import ExpandMoreIcon from '@material-ui/icons/ExpandMore';

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
  pushGet,
  substractQuantity,
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
    addToCart(addedItem);
  };

  const handleClickSub = (e, data) => {
    const subtractItem = meals.find((item) => item.name === e.currentTarget.id);
    substractQuantity(subtractItem);
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
      <div className="cdtl_menuAndType">
        <Menu tabular className="cdtl_menu_type">
          <Menu.Item id="Plats chaud" active={typeSelected === 'Plats chaud'} onClick={handleClickType} className="type_of_meal" value="Plats chaud">Nos plats Chaud</Menu.Item>
          <Menu.Item id="Apéritif Créole" active={typeSelected === 'Apéritif Créole'} className="type_of_meal" onClick={handleClickType} value="Apéritif Créole">Appéritif Créole</Menu.Item>
          <Menu.Item id="Nos sandwichs réunionnais" active={typeSelected === 'Nos sandwichs réunionnais'} className="type_of_meal" onClick={handleClickType} value="Nos sandwichs réunionnais">Nos Sandwichs Réunionnais</Menu.Item>
          <Menu.Item id="Gâteaux fait Maison" active={typeSelected === 'Gâteaux fait Maison'} className="type_of_meal" onClick={handleClickType} value="Gâteaux fait Maison">Nos Désserts</Menu.Item>
          <Menu.Item id="Boucherie" active={typeSelected === 'Boucherie'} className="type_of_meal" onClick={handleClickType} value="Boucherie">Traiteur "boucherie"</Menu.Item>
        </Menu>
        <div className="cdtl_menu_type_container">
          {mealTypeList.map((plat) => {
            const found = cart.find(element => element.name === plat.name);
            let count = 0;
            for (let i = 0; i < cart.length; ++i) {
              if (cart[i].name === plat.name) {
                count++;
              }
            }
            if (found === undefined) {
              return (
                <div className="container">
                  <div className="front">
                    <div className="inner">
                      <p>{plat.name}</p>
                      <span>{plat.price}€</span>
                    </div>
                  </div>
                  <div className="back">
                    <div className="inner">
                      <p>{plat.name}</p>
                      <p>{plat.ingredient}</p>
                      <p>{plat.price}€</p>
                      <button onClick={handleClickAdd} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button>
                    </div>
                  </div>
                </div>
              );
            }
            return (
              <div className="container">
                <div className="front">
                  <div className="inner">
                    <p>{plat.name}</p>
                    <span>{plat.price}€</span>
                  </div>
                </div>
                <div className="back">
                  <div className="inner">
                    <p>{plat.name}</p>
                    <p>{plat.ingredient}</p>
                    <p>{plat.price}€</p>
                    <div className="card_count">
                      <button onClick={handleClickSub} id={plat.name} className="cdtl_menu_button"><ExpandMoreIcon className="cdtl_menu_cartIcon" /></button>
                      <span>{count}</span>
                      <button onClick={handleClickAdd} id={plat.name} className="cdtl_menu_button"><ExpandLessIcon className="cdtl_menu_cartIcon" /></button>
                    </div>
                  </div>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </div>
  );
};

export default Menus;
