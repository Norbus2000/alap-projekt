import axios from 'axios';
import React, { useEffect, useState } from 'react';
import Box from '@mui/material/Box';
import InputLabel from '@mui/material/InputLabel';
import MenuItem from '@mui/material/MenuItem';
import FormControl from '@mui/material/FormControl';
import Select from '@mui/material/Select';
import { Button } from '@mui/material';
export default function Home(){
    const [matek, setMatek] = useState(null);
    const [kornyezet, setKornyezet] = useState(null);
    const [kategoriak, setKategoriak] = useState(null);
    const [matekToltes, setMatekToltes] = useState(true);
    const [kornyezetToltes, setKornyezetToltes] = useState(true);
    const [kategoriaToltes, setKategoroaToltes] = useState(true);
    const [valasztott, setValasztott] = useState(1);
    const [helyesValasz, setHelyesValasz] = useState(0);


    const handleChange = (event) =>{
        setValasztott(event.target.value)
    }

   


    const getMatek = () => {
        return axios.get("http://localhost:8000/tesztek/kategoria/"+1)
              .then((response) => 
              setMatek(response.data)).then(()=>{setMatekToltes(false)});
      }

      const getKornyezet = () => {
        return axios.get("http://localhost:8000/tesztek/kategoria/"+2)
              .then((response) => 
              setKornyezet(response.data)).then(()=>{setKornyezetToltes(false)});
      }

      const getKategoriak = () => {
        return axios.get("http://localhost:8000/kategoria")
              .then((response) => 
              setKategoriak(response.data)).then(()=>{setKategoroaToltes(false)});
      }

    
      useEffect(() => {
        getMatek();
        getKornyezet();
        getKategoriak();
      },[])

console.log(matek);
console.log(kornyezet);

      if(kornyezetToltes || kategoriaToltes || matekToltes){
        return<div>Töltés</div>
      }

    return <div>
    <h1>Tesztkérdések</h1>
         <FormControl >
  <Select
    label="Kategoria"
    onChange={handleChange}
    defaultValue={1}
  >
  {kategoriak.map((kategoria) => (
    <MenuItem value={kategoria.id}>{kategoria.kategorianev}</MenuItem>
      ))}
  </Select>
</FormControl> 

 {valasztott === 1 ? (<div>{matek.map((matekKerdes) => (
    <div >
    <div className='flex justify-center'>{matekKerdes.kerdes}</div>
    <div className='flex justify-center'>
        <div className="p-2 border-black rounded-sm">{matekKerdes.v1}</div>
        <div className="p-2">{matekKerdes.v2}</div>
        <div className="p-2">{matekKerdes.v3}</div>
        <div className="p-2">{matekKerdes.v4}</div>
        </div>
    </div>


      ))}</div>)
      
       : 
       
       (<div>{kornyezet.map((kornyezetKerdes) => (
        <div>
    <div className="flex justify-center">{kornyezetKerdes.kerdes}</div>
    <div className='flex justify-center'>
        <div  className="p-2">{kornyezetKerdes.v1}</div>
        <div className="p-2">{kornyezetKerdes.v2}</div>
        <div className="p-2">{kornyezetKerdes.v3}</div>
        <div className="p-2">{kornyezetKerdes.v4}</div>
    </div>
    </div>
      ))}</div>)} 

</div>
}