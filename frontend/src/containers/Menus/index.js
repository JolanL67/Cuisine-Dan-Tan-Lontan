import { connect } from 'react-redux';
import Menus from 'src/components/Menus';
import { addToCart } from 'src/action/cart';
import { getType, getAllMeal, allMealByType } from '../../action/menu';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  meals: state.menu.meals,
  cart: state.menu.cart,
  typeSelected: state.menu.typeSelected,
  mealTypeList: state.menu.mealTypeList,
});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  addToCart: (item) => {
    dispatch(addToCart(item));
  },
  getType: (typeName) => {
    dispatch(getType(typeName));
  },
  getAllMeal: () => {
    dispatch(getAllMeal());
  },
  allMealByType: (mealList) => {
    dispatch(allMealByType(mealList));
  },
});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Menus);
