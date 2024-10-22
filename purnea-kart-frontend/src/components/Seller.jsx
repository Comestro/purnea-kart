import React from 'react'
import { FaUserTie } from 'react-icons/fa';

function Seller() {
  return (
    <div>
      <button className='flex space-x-2 items-center font-medium'>
        <FaUserTie/>
        <p>Seller</p> 
      </button>
    </div>
  )
}

export default Seller