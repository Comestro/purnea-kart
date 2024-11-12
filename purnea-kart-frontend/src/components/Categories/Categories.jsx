import React, { useEffect, useState } from 'react'
import { fetchCategories } from '../../services/apiService';
import {Link} from 'react-router-dom'


function Categories() {
    const [categories, setCategories] = useState([]);
    const [error,setError]= useState('true');
    const [loading,setLoading]= useState('null')
    
    useEffect(()=>{
        const loadCatgories = async () => {
           try{
              const data = await fetchCategories();
              setCategories(data.categories)
              setLoading(false)
           }catch(err){
             setError(error)
             setLoading(false)
           }
        }
        loadCatgories();
    },[])

  return (
    <div className='w-full h-32 bg-white mt-3 '>
      <Link to={'/products'}>
        <div className='flex justify-center items-center space-x-10 px-40 py-5  '>
        {categories.map((categ)=>(
          <div className=' px-3 flex flex-wrap justify-center' key={categ.id}>

            <img src={`/purnea-kart/public/images/${categ.image}`}></img>
            {/* <div className='w-14 '>
              <img src='/assets/29327f40e9c4d26b.png'></img>
            </div> */}
            <p className='font-serif font-thin'>{categ.cat_title}</p>
          </div>
        ))}
        </div>
      </Link>
      
    </div>
  )
}

export default Categories