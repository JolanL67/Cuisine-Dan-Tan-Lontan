import React from 'react';
import AddShoppingCartIcon from '@material-ui/icons/AddShoppingCart';
import './menu.scss';


const PlatChaud = [
  {
    type: 'plat_chaud', name: 'Rougail Saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille La Morue', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille Boucané', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Carry Poulet', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Carry Crevette au combava', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'carry poisson au gingembres', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Carry poulet massalé', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Carry Ti jacque', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Carry pates cochon au pois cap', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'sauté de boeuf au oignons', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'sauté de boeuf aux bredes chinois', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'plat_chaud', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
];

const ApeCreole = [
  {
    type: 'Aperitif_creole', name: 'Samoussa Boeuf', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Samoussa Poulet', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Samoussa Fromage', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Bouchon Poulet ', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Bouchon Porc', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'carry poisson au gingembres', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Carry poulet massalé', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Carry Ti jacque', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Carry pates cochon au pois cap', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'sauté de boeuf au oignons', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'sauté de boeuf aux bredes chinois', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
  {
    type: 'Aperitif_creole', name: 'Rougaille saucisse', ingredient: 'Salade, Tomates, Oignons...', price: '8.50€',
  },
];

const Menu = () => (
  <div className="cdtl_menu">
    <h1 className="cdtl_menu_title">Notre Carte</h1>
    <h2 className="cdtl_menu_title_type">Nos plats Chaud</h2>
    <div className="cdtl_menu_type_container">
      {PlatChaud.map((plat) => {
        //console.log(plat.title);
        return (
          <div className="cdtl_menu_card">
            <div className="cdtl_menu_cardLeft">
              <h3>{plat.name}</h3>
              <p>{plat.ingredient}</p>
              <p>{plat.price} <AddShoppingCartIcon /></p>
            </div>
            <div className="cdtl_menu_cardRight">
            </div>
          </div>
        );
      })}
    </div>
    <h2 className="cdtl_menu_title_type">Aperitifs Creole</h2>
    <div className="cdtl_menu_type_container">
      {ApeCreole.map((plat) => {
        //console.log(plat.title);
        return (
          <div className="cdtl_menu_card">
            <div className="cdtl_menu_cardLeft">
              <h3>{plat.name}</h3>
              <p>{plat.ingredient}</p>
              <p>{plat.price} <AddShoppingCartIcon /></p>
            </div>
            <div className="cdtl_menu_cardRight">
            </div>
          </div>
        );
      })}
    </div>
  </div>
);

export default Menu;
