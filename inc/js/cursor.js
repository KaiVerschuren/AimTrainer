const cursor1 = document.querySelector('.cursor-1');
const cursor2 = document.querySelector('.cursor-2');

const preview1 = document.querySelector('#preview1');
const preview2 = document.querySelector('#preview2');
const preview3 = document.querySelector('#preview3');

let activeCursor = null;

function resetCursors() {
    cursor1.style.display = 'none';
    cursor2.style.display = 'none';
    document.documentElement.classList.remove('hide-system-cursor');
    activeCursor = null;
}

function enableCursor(cursor) {
    if (activeCursor === cursor) return;

    resetCursors();
    cursor.style.display = 'block';
    document.documentElement.classList.add('hide-system-cursor');
    activeCursor = cursor;
}

preview1.addEventListener('click', () => enableCursor(cursor1));
preview2.addEventListener('click', () => enableCursor(cursor2));
preview3.addEventListener('click', resetCursors);

// move active cursor only
document.addEventListener('mousemove', e => {
    if (!activeCursor) return;

    activeCursor.style.left = e.clientX + 'px';
    activeCursor.style.top = e.clientY + 'px';
});
