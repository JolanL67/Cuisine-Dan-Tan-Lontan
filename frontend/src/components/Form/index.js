import React from 'react';
import './form.scss';
import Cart from 'src/containers/Cart';


const Form = ({ pushData, fieldValue, name, firstName, phone, adress, mail, message, cart }) => {

  const handleClickGet = (event) => {
    event.preventDefault();
    pushData();
    console.log('action lancée');
  };

  const handleChangeInput = (e) => {
    fieldValue(e.target.value, e.target.name);
  };

  const isEnable = name !== '' && firstName !== '' && mail !== '' && phone !== '' && adress !== '' && message !== '' && cart.length !== 0;

  return (

    <div className="contact">
      <h1 id="Commande" className="contact_title">Votre commande</h1>
      <div className="contact_container">
        <div className="form_container">
          <div className="contact_information">
           <p>
              Informations: Toute commande de menu devra se faire 24h avant.
              Pour les aperitifs 3heures avant
              Les moyens de paiement sont : especes, cheques, Lydia(application mobile), virement Paypal.
           </p>
        </div>
          <form onSubmit={handleClickGet} className="contact_form">
            <p className="contact_rule">Les élements suivi du symbole (*) sont requis pour le bon déroulement de la commande</p>
            <div className="contact_form_items">
              <div className="contact_form_items_split">
                <input onChange={handleChangeInput} name="name" type="text" className="contact_form_item_split" placeholder="Nom*" />
                <input onChange={handleChangeInput} name="firstName" type="text" className="contact_form_item_split" placeholder="Prénom*" />
              </div>
              <div className="contact_form_items_split">
                <input onChange={handleChangeInput} name="phone" type="text" className="contact_form_item_split" placeholder="Téléphone*" />
                <input onChange={handleChangeInput} name="mail" type="email" className="contact_form_item_split" placeholder="Email*" />
              </div>
              <input onChange={handleChangeInput} name="adress" type="text" className="contact_form_item" placeholder="Adresse*" />
              <textarea onChange={handleChangeInput} name="message" className="contact_form_item" cols="30" rows="10" placeholder="Description*" />
            </div>
            <button disabled={!isEnable} className="contact_button" type="submit">Commander</button>
          </form>
        </div>
        <div className="cart_container">
          <Cart />
        </div>
      </div>
    </div>

  );
};

export default Form;
