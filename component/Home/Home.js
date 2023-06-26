import React from 'react';
import {View, StyleSheet, Text, Image} from 'react-native';

const Home = () => {
    return (
        <View>
            <View>
                <Image source={require('../../assets/logo_warung_amel.png')} style={styles.image} />
            </View>
        </View>
    );
}

const styles = StyleSheet.create({
    image: {
        width:350,
        height:80,
        marginTop:250,
       marginHorizontal:20
    }
})

export default Home;
