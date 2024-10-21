import React from 'react'
import Header from './components/Header/Header'
import Products from './components/Products/Products'
import Categories from './components/Categories/Categories'
import Brand from './components/Brand/Brand'
import Footer from './components/Footer/Footer'
import Offer from './components/Offer/Offer'





function App() {
  return (
    <div className='h-fit bg-slate-100'>
      <Header/>
      <Categories/>
      <Offer/>
      <Products/>
      <Brand/>
      <Footer/>
    </div>
  )
}

export default App