import React from 'react';
import styles from './header.module.css';

const Header = () => {
    return(
        <div className={styles.bodydiv}>
            <div className={styles.flexContainerHeader}>
                <div className={styles.flexItemHeader}>
                    <img src="http://127.0.0.1:8000/sysimages/logo.png" onclick="" width="100" height="100" />
                </div>
                <div className={styles.flexItemHeader}>
                    <h1 id="headerTitle">Castle Internet Bank</h1>
                </div>
            </div>
        </div>
    );
}

export default Header;