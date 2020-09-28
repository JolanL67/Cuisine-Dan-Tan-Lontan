import { connect } from 'react-redux';
import Cart from 'src/components/Cart';
import { addToCart } from 'src/action/cart';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  cart: state.menu.cart,
  total: state.menu.total,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  addToCart: (meal) => {
    dispatch(addToCart(meal));
  },
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Cart);
