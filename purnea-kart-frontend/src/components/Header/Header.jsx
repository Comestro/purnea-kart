
import React, { useState } from 'react'
import Container from '../container/container'
import {Logo,Cart,Seller,Login,Menu} from '../Index'

function Header() {
    const [isHovered, setIsHovered] = useState(false);

    const handleMouseEnter = () => setIsHovered(true);
    const handleMouseLeave = () => setIsHovered(false);
  return (
    <Container>
        <header>
            <nav className='w-full bg-white color-black'>
                <div className='flex justify-between py-4 px-8 '>
                   <div className='max-w-7xl mx-auto flex items-center justify-between'>
                        {/* <Link to='/home'> */}
                        <Logo/>
                        {/* </Link> */}
                    </div> 
                    <div className="hidden md:flex items-center w-[50%]">
                        <input 
                        className='bg-slate-200 w-full rounded-lg p-3'
                        type="search"
                        placeholder='search' />
                    </div>
                    <div className=' flex items-center space-x-10'>
                    <div
                            className="relative"
                            onMouseEnter={handleMouseEnter}
                            onMouseLeave={handleMouseLeave}
                            >
                            <button className=" px-4 py-2">Login</button>

                            {isHovered && <Login/>}
                    </div>
                        <div className='cart-section'>
                            <Cart/>
                        </div>
                        <div className='seller'>
                            <Seller/>
                        </div>
                        <div className='menu-icon'>
                            <Menu/>
                    </div>
                 
                </div>


              </div>
            </nav>
        </header>
     </Container>
  )
}

export default Header