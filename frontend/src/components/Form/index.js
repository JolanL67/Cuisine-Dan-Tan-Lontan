import React from 'react';
import './form.scss';
import Cart from 'src/containers/Cart';
import Snackbar from '@material-ui/core/Snackbar';
import MuiAlert from '@material-ui/lab/Alert';


const Form = ({ pushData, fieldValue, name, firstName, phone, adress, mail, message, cart, snackSuccesMessage, snackErrorMessage, closeErrorMessage, closeSuccesMessage }) => {

  function Alert(props) {
    return <MuiAlert elevation={6} variant="filled" {...props} />;
  }

  const handleClickGet = (event) => {
    event.preventDefault();
    pushData();
  };

  const handleChangeInput = (e) => {
    fieldValue(e.target.value, e.target.name);
  };

  const isEnable = name !== '' && firstName !== '' && mail !== '' && phone !== '' && adress !== '' && message !== '' && cart.length !== 0;

  const handleClose = () => {
    closeErrorMessage();
    closeSuccesMessage();
  };

  return (

    <div className="contact">
      <h1 id="Commande" className="contact_title">Votre commande</h1>
      <div className="contact_container">
        <div className="form_container">
          <div className="contact_information">
            <p>
              Informations:<br /> Toute commande de menu devra se faire 24h avant.
              Pour les aperitifs 3heures avant
              Les moyens de paiement sont : especes, cheques, Lydia (application mobile), virement Paypal.
            </p>
          </div>
          <form autoComplete="off" onSubmit={handleClickGet} className="contact_form">
            <p className="contact_rule">Les élements suivi du symbole (*) sont requis pour le bon déroulement de la commande</p>
            <div className="contact_form_items">
              <div className="contact_form_items_split">
                <input
                  onChange={handleChangeInput}
                  value={name}
                  name="name"
                  type="text"
                  className="contact_form_item_split"
                  placeholder="Nom*"
                  pattern="[A-Za-z]{3,}"
                  required
                  title="Veuillez verifier votre 'Nom', il doit contenir au minimum 3 lettres"
                />
                <input
                  onChange={handleChangeInput}
                  value={firstName}
                  name="firstName"
                  type="text"
                  className="contact_form_item_split"
                  placeholder="Prénom*"
                  pattern="[A-Za-z]{3,}"
                  required
                  title="Veuillez verifier votre 'Prenom', il doit contenir au minimum 3 lettres"
                />
              </div>
              <div className="contact_form_items_split">
                <input
                  onChange={handleChangeInput}
                  value={phone}
                  name="phone"
                  type="tel"
                  className="contact_form_item_split"
                  placeholder="Téléphone*"
                  pattern="[0]{1}[1-9]{1}[0-9]{8}"
                  required
                  title="Votre numero de telephone doit etre composé de 10 chiffres et commencer par un zero"
                />
                <input
                  onChange={handleChangeInput}
                  value={mail}
                  name="mail"
                  type="email"
                  className="contact_form_item_split"
                  placeholder="Email*"
                  pattern="[A-Za-z0-9._%+-]{3,}+@[A-Za-z0-9.-]+\.[A-Za-z]{3,5}"
                  required
                  title="Veuillez verifier le format de votre adresse mail"
                />
              </div>
              <input
                onChange={handleChangeInput}
                value={adress}
                name="adress"
                type="text"
                className="contact_form_item"
                placeholder="Adresse*"
                pattern="[A-Za-z0-9, ]{10,}"
                required
                title=" Veuillez renseigner votre adresse complete (10 charactere minimum..)"
              />
              <textarea
                onChange={handleChangeInput}
                value={message}
                name="message"
                className="contact_form_item"
                cols="30"
                rows="10"
                placeholder="Veuillez nous indiqué le jour et l'heure de livraison souhaité, ainsi que la viande que vous desirez pour les plats ou vous avez le choix..."
                pattern="[A-Za-z0-9, !?.-]{10,}"
                required
             />
            </div>
            <button disabled={!isEnable} className="contact_button" type="submit">Commander</button>
          </form>
          <Snackbar open={snackSuccesMessage} autoHideDuration={6000} onClose={handleClose}>
            <Alert onClose={handleClose} severity="success">
              Felicitation votre commande a bien été envoyé, nous allons vous contacter au plus vite...
            </Alert>
          </Snackbar>
          <Snackbar open={snackErrorMessage} autoHideDuration={6000} onClose={handleClose}>
            <Alert onClose={handleClose} severity="error">
              Il y a eu un léger soucis lors du passage de votre commande veuillez réesayer ou nous contacter directement au numero indiqué dans 'Contact'...
            </Alert>
          </Snackbar>
        </div>
        <div className="cart_container">
          <Cart />
        </div>
      </div>
    </div>

  );
};

export default Form;
