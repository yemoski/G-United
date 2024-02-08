import './App.css';
import Category from './components/Category/Category';
import Footer from './components/Footer/Footer';
import Navbar from './components/Navbar/Navbar';
import Home from './pages/Home/Home';
import SearchBanner from './components/SearchBanner/SearchBanner';

function App() {
  return (
    <div>
        <Navbar />
        <Home />
      <Footer />
    </div>
      
  );
}

export default App;
