import React from 'react';
import AddShoppingCartIcon from '@material-ui/icons/AddShoppingCart';

import './menu.scss';

import Cake from 'src/assets/image/cake.png';
import Chef from 'src/assets/image/chef.png';
import Clock from 'src/assets/image/clock.png';
import Taco from 'src/assets/image/taco.png';
import Food from 'src/assets/image/food-serving.png';

const onClick = (e, data) => {
  console.log(e.currentTarget.id);
};

const Menu = ({meals}) => {

  const platChaud = meals.filter((meal) => meal.type === 'Plats chaud');
  const aperitifCreole = meals.filter((meal) => meal.type === 'Apéritif Créole');
  const homeCake = meals.filter((meal) => meal.type === 'Gâteaux fait Maison');
  const ourSandwich = meals.filter((meal) => meal.type === 'Nos sandwichs réunionnais');
  const theButcher = meals.filter((meal) => meal.type === 'Boucherie');

/* console.log(platChaud);
console.log(aperitifCreole);
console.log(homeCake);
console.log(ourSandwich);
console.log(theButcher); */

  return (
    <div className="cdtl_menu">
      <h1 className="cdtl_menu_title">La Carte</h1>
      <h2 className="cdtl_menu_title_type">
        Nos plats Chaud
        <img className="cdtl_menu_img_type" src={Food} alt= "type food" />
      </h2>
      <div className="cdtl_menu_type_container">
        {platChaud.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€ <button onClick={onClick} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
      <h2 className="cdtl_menu_title_type">
        Nos Appéritif Créole
        <img className="cdtl_menu_img_type" src={Clock} alt= "type food" />   
      </h2>
      <div className="cdtl_menu_type_container">
        {aperitifCreole.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€ <button onClick={onClick} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
      <h2 className="cdtl_menu_title_type">
        Nos Sandwichs Réunionnais
        <img className="cdtl_menu_img_type" src={Taco} alt= "type food" />   
      </h2>
      <div className="cdtl_menu_type_container">
        {ourSandwich.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€ <button onClick={onClick} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
      <h2 className="cdtl_menu_title_type">
        Nos Désserts
        <img className="cdtl_menu_img_type" src={Cake} alt= "type food" />
    </h2>
      <div className="cdtl_menu_type_container">
        {homeCake.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€ <button onClick={onClick} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
      <h2 className="cdtl_menu_title_type">
        Traiteur "boucherie"
        <img className="cdtl_menu_img_type" src={Chef} alt= "type food" />   
      </h2>
      <div className="cdtl_menu_type_container">
        {theButcher.map((plat) => {
          return (
            <div className="cdtl_menu_card">
              <div className="cdtl_menu_cardLeft">
                <h3 className="cdtl_menu_card_title">{plat.name}</h3>
                <p className="cdtl_menu_card_ingredients">{plat.ingredient}</p>
                <p className="cdtl_menu_card_price">{plat.price}€/Kg <button onClick={onClick} id={plat.name} className="cdtl_menu_button"><AddShoppingCartIcon className="cdtl_menu_cartIcon" /></button></p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};



export default Menu;
