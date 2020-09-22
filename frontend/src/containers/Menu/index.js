import { connect } from 'react-redux';
import Menu from 'src/components/Menu';
import { addToCart } from 'src/action/cart';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  meals: state.menu.meals,
  cart: state.menu.cart,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  addToCart: (item) => {
    dispatch(addToCart(item));
  },
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Menu);
