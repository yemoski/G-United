import './App.css';
import Category from './components/Category/Category';
import Footer from './components/Footer/Footer';
import Navbar from './components/Navbar/Navbar';
import Home from './pages/Home/Home';
import Register from './pages/Register/Register';
import Login from './pages/Login/Login';
import {
  createBrowserRouter,
  RouterProvider,
  Navigate,
  Outlet
} from "react-router-dom";

function App() {
  const Layout = () =>{
    return (
      <div className="app">
        <Navbar/>
        <Outlet/>
        <Footer/>
      </div>
    );
  };

  const router = createBrowserRouter([
    {
      path: "/",
      element: (
      
          <Layout />
       
      ),
      
    },
    {
      path:"/",
      element:<Layout/>,
      children:[

        {
          path:"/home",
          element:<Home/>
        },
        {
          path:"/",
          element:<Home/>
        },
        {
          path:"/register",
          element:<Register/>
        },
        {
          path:"/login",
          element:<Login/>
        },
      
      
  ]}
  
  ]);
  return (
    <div className="app">
      
    <RouterProvider router={router}/>
    </div>
      
  );
}

export default App;
