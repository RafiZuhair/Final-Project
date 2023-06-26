import React, { Component } from "react";
import {
    StyleSheet,
    View,
    Text,
    Image,
    TextInput,
    TouchableOpacity
} from "react-native";

function Untitled(props) {
    return (
        <View style={styles.container}>
            <Text style={styles.masukanMenu}>MASUKAN MENU</Text>
            <Image
                source={require("../../assets/logo_warung_amel.png")}
                resizeMode="contain"
                style={styles.image}
            />
            <View style={styles.group2}>
                <Text style={styles.namaMenu}>NAMA MENU</Text>
                <TextInput
                    placeholder="masukkan menu"
                    style={styles.placeholder}
                ></TextInput>
            </View>
            <View style={styles.group}>
                <Text style={styles.jumlah}>JUMLAH</Text>
                <TextInput
                    placeholder="masukkan jumlah"
                    style={styles.placeholder1}
                    keyboardType="number-pad"
                ></TextInput>
            </View>
            <View style={styles.group3}>
                <TouchableOpacity style={styles.button}>
                    <Text style={styles.kirim}>Kirim</Text>
                </TouchableOpacity>
            </View>
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1
    },
    masukanMenu: {

        fontSize: 22,
        marginTop: 214,
        marginLeft: 102
    },
    image: {
        width: 279,
        height: 94,
        marginTop: -158,
        marginLeft: 48
    },
    group2: {
        width: 279,
        height: 93,
        marginTop: 120,
        marginLeft: 48
    },
    namaMenu: {

        color: "#121212"
    },
    placeholder: {

        color: "#121212",
        height: 62,
        width: 279,
        marginTop: 14,
        backgroundColor: '#F8F7F3',
        borderColor: 'black',
        borderRadius: 10
    },
    group: {
        width: 279,
        height: 89,
        marginTop: 45,
        marginLeft: 48
    },
    jumlah: {

        color: "#121212"
    },
    placeholder1: {

        color: "#121212",
        height: 62,
        width: 279,
        marginTop: 10,
        backgroundColor: '#F8F7F3',
        borderColor: 'black',
        borderRadius: 10
    },
    group3: {
        width: 165,
        height: 56,
        marginTop: 47,
        marginLeft: 102
    },
    button: {
        width: 165,
        height: 56,
        backgroundColor: "#772222",
        borderRadius: 10
    },
    kirim: {
        fontFamily: "roboto-regular",
        color: "white",
        marginTop: 20,
        marginLeft: 66,
    }
});

export default Untitled;
