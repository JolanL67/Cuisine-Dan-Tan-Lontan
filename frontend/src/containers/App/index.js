import { connect } from 'react-redux';
import App from 'src/components/App';
import { getAllMeal } from 'src/action/menu';
import { getPresentation } from 'src/action/information';

const mapStateToProps = (state) => ({
  // nom de la prop à remplir: donnée à récupérer dans le state
  meals: state.menu.meals,
  presentation: state.information.presentation,
  loading: state.information.loading,

});

const mapDispatchToProps = (dispatch) => ({
  // nom de la prop à remplir: callback qui contient un appel à dispatch
  // With dispatch we send the action in the reducer
  getAllMeal: () => {
    dispatch(getAllMeal());
  },

  getPresentation: () => {
    dispatch(getPresentation());
  },

});

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(App);
