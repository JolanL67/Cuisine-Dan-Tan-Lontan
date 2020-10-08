import { connect } from 'react-redux';
import Cart from 'src/components/Cart';
import { removeItem, cartForData } from 'src/action/cart';
import { priceLessDiscount } from '../../action/cart';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  cart: state.menu.cart,
  total: state.menu.total,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  removeItem: (item, itemPrice) => {
    dispatch(removeItem(item, itemPrice));
  },

  cartForData: (array) => {
    dispatch(cartForData(array));
  },

  priceLessDiscount: (discount) => {
    dispatch(priceLessDiscount(discount));
  },

});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Cart);
